<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use zcrmsdk\crm\crud\ZCRMRecord;
use Pixers\SalesManagoAPI\Client;
use zcrmsdk\oauth\ZohoOAuth;
use Pixers\SalesManagoAPI\SalesManago;
use Carbon\Carbon;
use App\LogsSync;
use Illuminate\Support\Arr;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;

class ModifySalesManagoToZoho extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:modifysales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia los usuarios modificados de SalesManago a Zoho en un rango de fecha';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->modifysales();
    }

    public function modifysales(){
        $client = new Client('o28qhomp7m09zozm', "https://app3.salesmanago.pl/api/", 'kvi2rweud3qlrov3h7lvwbisf8lhcs47', 'nzl7tyqare1ac1rxoeba0vqf7du7pj6o');
        // inicializar salesmanago
        $salesManago = new SalesManago($client);
        
        //condicional para evaluar ultima fecha log

      //  $fechaInicial = Carbon::now()->startOfDay()->timestamp * 1000; // inicia todo los dias a las 12:00:00am del dia actual
        $today = Carbon::now()->timestamp * 1000;
        $logs = LogsSync::where('origin',2)->get();
        $lastLog = $logs->last();
        
        $fechaInicial = ($lastLog) ?  Carbon::parse($lastLog->endDate) : Carbon::now()->startOfDay();
        /*
        $contactResponse = $salesManago->getContactService()->listRecentlyModified("Auxiliarmkt@iesa.cc", array(
            "from" => $fechaInicial->timestamp * 1000,
            "to" => $today
        ));
        $contacts = $contactResponse->modifiedContacts; // obtiene la lista de contactos (email, id) modificados en el rango 
        //dd($contacts);

        $emails = array(); 
        foreach($contacts as $contact){
            // array("email1@mailinator.com", "email2@mailinator.com" ....)
            array_push($emails, $contact->email);
        }
        */
        $emails = array(
            '0fe7d50d-97ce-4725-828f-f1f43bc78f5e',
            '1ae96687-76d2-45bd-8506-d84d86ad414f',
            'ca5bdffc-f24f-4417-a5ac-01adb1e3437c',
            'c5c45fa4-5b89-4b7e-93c1-956dd5cfe864',
            '8f51b548-882f-47ee-b2f3-683239283c44',
            '42813018-1d1f-415b-bc44-3980a0dce3fe',
            '3ab1c66f-d251-48df-bb73-dccae86f0927',
            'ebdb064a-280b-4960-8920-98c94be24bc6',
            '3c178c82-1131-4c32-960a-d027a395799e',
            '64cf98f8-d560-4a5a-a2d4-0514a8d55669'
        ); // data hardcode test
        
        if(sizeof($emails) > 0) // si hay correos para modificar
        {
            // inicializacion de zoho
            ZCRMRestClient::initialize(array(
                "client_id"=>"1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H",
                "token_persistence_path"=> storage_path('token2'), // this path is 
                "client_secret"=>"f5f87419d96e9bce999e108588af8eab175b23d8a4",
                "redirect_uri"=>"http://www.lafamiliaperfecta.com/",
                "currentUserEmail"=>"sleal@iesa.cc",
                "sandbox"=>"false",
                "apiVersion"=>"v2",
                "access_type"=>"offline",
                "accounts_url"=>"https://accounts.zoho.com",
                "persistence_handler_class"=>"",
                "apibaseurl"=>"www.zohoapis.com"
            ));
            
            $moduleLeads = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); 
            $recordsSales = array(); //to sales
            $recordsZoho = array(); // to zoho
            $loteEmails = array_chunk($emails, 50);

            //lote de 50 en 50
            foreach($loteEmails as $lote){

                $infoContactos = $salesManago->getContactService()->listByIds("sleal@iesa.cc", array(
                    // ejm:  $emails => array("jeanpierre@mailinator.com", "jeanpaul@mailinator.com", "scarlet@mailinator.com")
                    "contactId" => $lote
                )); 
                
                if($infoContactos && sizeof($infoContactos->contacts) > 0){
                    foreach($infoContactos->contacts as $salecontact)
                    {
                        
                        /*
                        // pensar logica con calma para comprobar si el mas actualizado es sales o zoho
                        $criteria="SalesManago_Contact_ID:equals:".$salecontact->id;
                        $responseCriteria = $moduleLeads->searchRecordsByCriteria($criteria);

                        $data = $responseCriteria->getData();
                        $zohoContact = sizeof($data)? array_shift($data): null;
                        
                        $zohoRecienteAManago = (Carbon::parse($zohoContact->getModifiedTime())->timestamp * 1000) > $salecontact->modifiedOn;
                        $ultimoEmail =  $zohoRecienteAManago ? $zohoContact->getFieldValue("Email"): $salecontact->email;
                        $ultimoNombre =  $zohoRecienteAManago ? $zohoContact->getFieldValue("Full_Name"): $salecontact->name;
                        //dd($salecontact, $zohoContact, (Carbon::parse($zohoContact->getModifiedTime())->timestamp * 1000), $salecontact->modifiedOn, (Carbon::parse($zohoContact->getModifiedTime())->timestamp * 1000) > $salecontact->modifiedOn, $ultimoEmail, $ultimoNombre);
                        
                        if($zohoRecienteAManago){
                            $modificaUltimoSales = array();
                            $modificaUltimoSales["contact"]["name"] = $ultimoNombre;
                            //$modificaUltimoSales["contact"]["email"] = $ultimoEmail;
                            $modificaUltimoSales["newEmail "] = $ultimoEmail;
                            $modificaUltimoSales["async"] = false;
                            //dd($modificaUltimoSales, $salecontact->email);
                            $salesManago->getContactService()->upsert("sleal@iesa.cc",$salecontact->email, $modificaUltimoSales);
                        }*/
                      
                        $custom = collect($salecontact->properties);
                       
                        $toZoho = ZCRMRecord::getInstance(null, null);
                        $toZoho->setFieldValue("SalesManago_Contact_ID", $salecontact->id);
                        //$toZoho->setFieldValue("Email", $salecontact->email);

                        // restrinjo a q registre 40 caracteres
                        
                        $nameComplete = trim(substr($salecontact->name, 0, 39)); 
                        $toZoho->setFieldValue("Full_Name", $nameComplete);
                        $fullname = explode(" ", $nameComplete);                   
                        switch(sizeof($fullname)){
                            case 2: // array("Pedro", "Gonzalez")
                                $toZoho->setFieldValue("First_Name", trim(substr($fullname[0], 0 ,39)));
                                $toZoho->setFieldValue("Last_Name", trim(substr($fullname[1], 0 ,39)));
                            break;
                            case 3:// array("Juan", "Pedro","Gonzalez")
                                $toZoho->setFieldValue("First_Name", trim($fullname[0]." ".$fullname[1]));
                                $toZoho->setFieldValue("Last_Name", trim($fullname[2]));
                            break;
                            case 4:// array("Juan", "Pedro","Gonzalez")
                                $toZoho->setFieldValue("First_Name", trim($fullname[0]." ".$fullname[1]));
                                $toZoho->setFieldValue("Last_Name", trim($fullname[2]." ".$fullname[3]));
                            break;
                            default: // array("Juan", "Juan") // Last_Name Required ZOHO
                                $toZoho->setFieldValue("First_Name", $nameComplete);
                                $toZoho->setFieldValue("Last_Name", $nameComplete);
                            break;
                        }
                        
                        $toZoho->setFieldValue("Phone", $salecontact->phone);
                        
                        if(!empty($custom->firstWhere('name', 'mensaje')->value)){
                            $toZoho->setFieldValue("Description", $custom->firstWhere('name', 'mensaje')->value);
                        }
    
                        if(!empty($custom->firstWhere('name', 'Estado')->value)){
                            $toZoho->setFieldValue("Estado", $custom->firstWhere('name', 'Estado')->value);
                        }
    
                        if(!empty($custom->firstWhere('name', 'brand')->value)){
                            $toZoho->setFieldValue("Marca", explode( ",",$custom->firstWhere('name', 'brand')->value));    
                        }
    
                        if(!empty($custom->firstWhere('name', 'Pais')->value)){
                            $toZoho->setFieldValue("Country", $custom->firstWhere('name', 'Pais')->value);
                        }
    
                        if(!empty($custom->firstWhere('name', 'producto')->value)){
                            $toZoho->setFieldValue("Producto", $custom->firstWhere('name', 'producto')->value);
                        }
    
                        if(isset($custom->firstWhere('name', 'fecha_showroom')->value)){                        
                            $dateShowroom = explode('-', $custom->firstWhere('name', 'fecha_showroom')->value);
                            $toZoho->setFieldValue("Fecha_de_visita_al_Showroom",  Carbon::createFromDate($dateShowroom[0], $dateShowroom[1], $dateShowroom[2])->format("Y-m-d"));
                        }
    
                        if(isset($custom->firstWhere('name', 'hora_showroom')->value)){
                            $toZoho->setFieldValue("Hora_de_visita_al_showroom", $custom->firstWhere('name', 'hora_showroom')->value );
                        }
    
                        if(isset($custom->firstWhere('name', 'fecha_cooking_demo')->value)){
                            $dateCookingDemo = explode('-', $custom->firstWhere('name', 'fecha_cooking_demo')->value);
                            $toZoho->setFieldValue("Fecha_de_cooking_demo", Carbon::createFromDate($dateCookingDemo[0], $dateCookingDemo[1], $dateCookingDemo[2])->format("Y-m-d"));
                        }
    
                        if(isset($custom->firstWhere('name', 'fecha_llamada')->value)){
                            $dateCall = explode('-', $custom->firstWhere('name', 'fecha_llamada')->value);
                            $toZoho->setFieldValue("Fecha_de_la_llamada",   Carbon::createFromDate($dateCall[0], $dateCall[1], $dateCall[2])->format("Y-m-d"));
                        }
    
                        if(isset($custom->firstWhere('name', 'hora_llamada')->value)){
                            $toZoho->setFieldValue("Hora_de_la_llamada", $custom->firstWhere('name', 'hora_llamada')->value);
                        }
    
                        if(!empty($custom->firstWhere('name', 'UTM_AnuncioID')->value)){
                            $toZoho->setFieldValue("UTM_Anuncio_ID", $custom->firstWhere('name', 'UTM_AnuncioID')->value );
                        }
    
                        if(!empty($custom->firstWhere('name', 'UTM_Campaign')->value)){
                            $toZoho->setFieldValue("UTM_Campaign_Name", $custom->firstWhere('name', 'UTM_Campaign')->value);
                        }
    
                        if(!empty($custom->firstWhere('name', 'UTM_Source')->value)){
                            $toZoho->setFieldValue("UTM_Source", $custom->firstWhere('name', 'UTM_Source')->value );
                        } 

                          
                        if(!empty($salecontact->contactFunnels)){
                            // Visita a ShowRoom Agendada => VISITA_A_SHOWROOM_AGENDADA
                            $leadSouce = strtoupper($salecontact->contactFunnels[0]->salesStage);
                            
                            if($leadSouce !== "LLAMADA AGENDADA" && $leadSouce !== "COOKING DEMO AGENDADO" && $leadSouce !== "VISITA A SHOWROOM AGENDADA"){
                                $leadSouce = "Lead Nuevo";
                            }
                        
                            $toZoho->setFieldValue("Lead_Status",  $leadSouce);
                        }
                    
                        array_push($recordsZoho, $toZoho);
                    }
                    $logs_sync = new LogsSync;
                    $logs_sync->startDate = $fechaInicial;
                    $logs_sync->endDate = Carbon::now();
                    $logs_sync->mails = json_encode($emails);
                    $logs_sync->cant = count($emails);
                    $logs_sync->origin = 2;//1 create 2 update
                    
                    $logs_sync->save();
                    echo "Sales to Zoho Modify ". count($emails)."\n";
                    //$this->zoho();
                    //dd($records);
                    //*
                    $response = $moduleLeads->upsertRecords($recordsZoho,null,null,null); // updating the records.
                    
                    $zoho_response= $response->getEntityResponses();
                    dd($zoho_response);
                    //*/
                }
           
            }     
        }else{
            $logs_sync = new LogsSync;
            $logs_sync->startDate = $fechaInicial;
            $logs_sync->endDate = Carbon::now();
            $logs_sync->mails = json_encode('[]');
            $logs_sync->cant = 0;
            $logs_sync->origin = 2;//1 create 2 update
            
            $logs_sync->save();
            echo "Sin registros nuevos Sales to Zoho \n";

        }
    
    }

}
