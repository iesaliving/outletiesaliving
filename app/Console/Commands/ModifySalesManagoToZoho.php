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
            "sem@ctrl-ad.com",
            "leads.webforms@gmail.com",
            "uniquemx.mkt@gmail.com",
            "Marco@wizerlink.com",
            "Marco@wizerlink.net",
            "MMendoza.mkt@gmail.com",
            "mendozaweffer@gmail.com",
            "Administracion@wizerlink.net",
            "Jane@wizerlink.net",
            "Jane@wizerlink.com",
            "Projects@wizerlink.com",
            "jeanpierre@mailinator.com", 
            "jeanpaul@mailinator.com", 
            "scarlet@mailinator.com"
        ); // data hardcode test
        
        if(sizeof($emails) > 0) // si hay correos para crear
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
            $records = array();

            $loteEmails = array_chunk($emails, 50);

            //dd($loteEmails);
            foreach($loteEmails as $lote){

                $infoContactos = $salesManago->getContactService()->listByEmails("sleal@iesa.cc", array(
                    // ejm:  $emails => array("jeanpierre@mailinator.com", "jeanpaul@mailinator.com", "scarlet@mailinator.com")
                    "email" => $lote
                )); 
                
                if($infoContactos && sizeof($infoContactos->contacts) > 0){
                    foreach($infoContactos->contacts as $contact)
                    {
                        
                        $fullname = explode(" ", trim($contact->name));
                        $custom = collect($contact->properties);
                        
                        $record = ZCRMRecord::getInstance(null, null);
                        $record->setFieldValue("Email", $contact->email);
                        $record->setFieldValue("Full_Name", $contact->name);
                        
                        switch(sizeof($fullname)){
                            case 2: // array("Pedro", "Gonzalez")
                                $record->setFieldValue("First_Name", $fullname[0]);
                                $record->setFieldValue("Last_Name", $fullname[1]);
                            break;
                            case 3:// array("Juan", "Pedro","Gonzalez")
                                $record->setFieldValue("First_Name", $fullname[0]." ".$fullname[1]);
                                $record->setFieldValue("Last_Name", $fullname[2]);
                            break;
                            case 4:// array("Juan", "Pedro","Gonzalez")
                                $record->setFieldValue("First_Name", $fullname[0]." ".$fullname[1]);
                                $record->setFieldValue("Last_Name", $fullname[2]." ".$fullname[3]);
                            break;
                            default: // array("Juan", "Juan") // Last_Name Required ZOHO
                            $record->setFieldValue("First_Name", $contact->name);
                            $record->setFieldValue("Last_Name", $contact->name);
                            break;
                        }
                        
                        $record->setFieldValue("Phone", $contact->phone);
                        if(!empty($custom->firstWhere('name', 'mensaje')->value)){
                            $record->setFieldValue("Description", $custom->firstWhere('name', 'mensaje')->value);
                        }
                        
                        if(!empty($custom->firstWhere('name', 'estado')->value)){
                            $record->setFieldValue("Estado", $custom->firstWhere('name', 'estado')->value);
                        }
                        
                        if(!empty($custom->firstWhere('name', 'brand')->value)){
                            $record->setFieldValue("Marca", explode( ",",$custom->firstWhere('name', 'brand')->value));    
                        }

                        if(!empty($custom->firstWhere('name', 'pais')->value)){
                            $record->setFieldValue("Pais", $custom->firstWhere('name', 'pais')->value);
                        }
                    
                        if(!empty($custom->firstWhere('name', 'producto')->value)){
                            $record->setFieldValue("Producto", $custom->firstWhere('name', 'producto')->value);
                        }
                        
                        if(isset($custom->firstWhere('name', 'hora_showroom')->value)){
                            $record->setFieldValue("Hora_de_visita_al_showroom", $custom->firstWhere('name', 'hora_showroom')->value );
                        }

                        if(isset($custom->firstWhere('name', 'fecha_llamada')->value)){
                            $dateCall = explode('-', $custom->firstWhere('name', 'fecha_llamada')->value);
                            $record->setFieldValue("Fecha_de_la_llamada",  $dateCall[2]."-".$dateCall[1]."-".$dateCall[0] );
                        }
    
                        
                        if(isset($custom->firstWhere('name', 'hora_llamada')->value)){
                            $record->setFieldValue("Hora_de_la_llamada", $custom->firstWhere('name', 'hora_llamada')->value);
                        }
                        
                        if(!empty($custom->firstWhere('name', 'UTM_AnuncioID')->value)){
                            $record->setFieldValue("UTM_Anuncio_ID", $custom->firstWhere('name', 'UTM_AnuncioID')->value );
                        }
                        
                        if(!empty($custom->firstWhere('name', 'UTM_Campaign')->value)){
                            $record->setFieldValue("UTM_Campaign_Name", $custom->firstWhere('name', 'UTM_Campaign')->value);
                        }
                        
                        if(!empty($custom->firstWhere('name', 'UTM_Source')->value)){
                            $record->setFieldValue("UTM_Source", $custom->firstWhere('name', 'UTM_Source')->value );
                        } 
                        
                        if(!empty($contact->contactFunnels)){
                            // Visita a ShowRoom Agendada => VISITA_A_SHOWROOM_AGENDADA
                            $leadSouce = strtoupper($contact->contactFunnels[0]->salesStage);
                            
                            if($leadSouce !== "LLAMADA AGENDADA" && $leadSouce !== "COOKING DEMO AGENDADO" && $leadSouce !== "VISITA A SHOWROOM AGENDADA"){
                                $leadSouce = "Lead Nuevo";
                            }
                            
                            $record->setFieldValue("Lead_Status",  $leadSouce);
                        }

                        if(isset($custom->firstWhere('name', 'fecha_showroom')->value)){                        
                            $dateShowroom = explode('-', $custom->firstWhere('name', 'fecha_showroom')->value);
                            $record->setFieldValue("Fecha_de_visita_al_Showroom", $dateShowroom[2]."-".$dateShowroom[1]."-".$dateShowroom[0]);
                        }
                        
                        if(isset($custom->firstWhere('name', 'fecha_cooking_demo')->value)){
                            $dateCookingDemo = explode('-', $custom->firstWhere('name', 'fecha_cooking_demo')->value);
                            $record->setFieldValue("Fecha_de_cooking_demo", $dateCookingDemo[2]."-".$dateCookingDemo[1]."-".$dateCookingDemo[0]);
                        }
                    
                        array_push($records, $record);
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
                    $response = $moduleLeads->upsertRecords($records,null,null,null); // updating the records.
                    
                    $zoho_response= $response->getEntityResponses();
                    // dd($zoho_response);
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

    public function zoho(){
        // zoho script 
        $client = new Client('o28qhomp7m09zozm', "https://app3.salesmanago.pl/api/", 'kvi2rweud3qlrov3h7lvwbisf8lhcs47', 'nzl7tyqare1ac1rxoeba0vqf7du7pj6o');
        // Then - initialize SalesManago Services Locator
        $salesManago = new SalesManago($client);

        ZCRMRestClient::initialize(array(
            "client_id"=>"1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H",
            "token_persistence_path"=> 'C:\xampp\htdocs\IESA\storage\token2', // this path is 
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
        
        $oAuthClient = ZohoOAuth::getClientInstance();

        // $grantToken = "1000.8a78d62bbb9b9e9403435a4f82b89d3b.79e73683898c9d339cb9b733e66f2165";
        // $oAuthTokens = $oAuthClient->generateAccessToken($grantToken); 
        // dd($oAuthTokens);

        $userIdentifier = "sleal@iesa.cc"; 
        $oAuthTokens = $oAuthClient->getAccessToken($userIdentifier);
        
        //dd($oAuthTokens);

        // $zohoV2UserEmail="sleal@iesa.cc"
        // return $oAuthClient->getAccessToken($zohoV2UserEmail);

        $startDate = Carbon::now();//->timestamp * 1000;
        $logs = LogsSync::where('origin', 3)->get();
        $lastLog = $logs->last();
        
        $fechaInicial = ($lastLog) ?  Carbon::parse($lastLog->endDate) : Carbon::now()->startOfDay();

        $url = "https://www.zohoapis.com/crm/v2/coql";
        /*
        $json = array (
            "select_query" => "select Full_Name, Email, Phone, Description, Estado, Marca, Producto, Fecha_de_visita_al_Showroom, Hora_de_visita_al_showroom, Fecha_de_cooking_demo, Fecha_de_la_llamada, Hora_de_la_llamada, UTM_Anuncio_ID, UTM_Campaign_Name, UTM_Source, Lead_Source, Created_Time, Modified_Time
            from Leads
            where Modified_Time between '".$fechaInicial->toIso8601String()."' and  '". $startDate->toIso8601String() ."'"
        );
        */
        $json = array (
            "select_query" => "select Full_Name, Email, Phone, Description, Estado, Marca, Producto, Fecha_de_visita_al_Showroom, Hora_de_visita_al_showroom, Fecha_de_cooking_demo, Fecha_de_la_llamada, Hora_de_la_llamada, UTM_Anuncio_ID, UTM_Campaign_Name, UTM_Source, Lead_Source, Created_Time, Modified_Time
            from Leads
            where Email in('jeanpierre@mailinator.com', 'jeanpaul@mailinator.com', 'scarlet@mailinator.com')"
        );

         $ch =   curl_init($url);
         //curl_setopt($ch, CURLOPT_HTTPHEADER,$this->headers);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: Zoho-oauthtoken '.$oAuthTokens ));
         curl_setopt($ch, CURLOPT_POST, 1); 
         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json)); 
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
         $response2 = curl_exec($ch);
         curl_close($ch);

        //dd(Carbon::now()->toIso8601String());
        $contactsZoho = json_decode($response2);
        
        //dd($contactsZoho);
        if($contactsZoho){
            $listModified = array(); 
            $emails = array();
            foreach( $contactsZoho->data as $contactZoho){
              
                $contact = array();
                $contact["contact"]["name"] = $contactZoho->Full_Name;
                $contact["async"] = false;
                
                if(!empty($contactZoho->Phone)){
                    $contact["contact"]["phone"] = $contactZoho->Phone;
                }
                
                if(count($contactZoho->Marca) > 0 ){
                    $contact["properties"]["brand"] = implode(",", $contactZoho->Marca);
                }
                
                if(!empty($contactZoho->Estado)){
                    $contact["properties"]["estado"] = $contactZoho->Estado;
                }

                if(!empty($contactZoho->Description)){
                    $contact["properties"]["mensaje"] = $contactZoho->Description;
                }
                
                if(!empty($contactZoho->Producto)){
                    $contact["properties"]["producto"] = $contactZoho->Producto;
                }

                if(!empty($contactZoho->Fecha_de_visita_al_Showroom)){
                    $contact["properties"]["fecha_showroom"] = $contactZoho->Fecha_de_visita_al_Showroom;
                }
                
                if(!empty($contactZoho->Hora_de_visita_al_showroom)){
                    $contact["properties"]["hora_showroom"] = $contactZoho->Hora_de_visita_al_showroom;     
                }
                
                if(!empty($contactZoho->Fecha_de_cooking_demo)){
                    $contact["properties"]["fecha_cooking_demo"] = $contactZoho->Fecha_de_cooking_demo;
                }
                
                if(!empty($contactZoho->Fecha_de_la_llamada)){
                    $contact["properties"]["fecha_llamada"] = $contactZoho->Fecha_de_la_llamada;
                }

                if(!empty($contactZoho->Hora_de_la_llamada)){
                    $contact["properties"]["hora_llamada"] = $contactZoho->Hora_de_la_llamada;
                }

                if(!empty($contactZoho->UTM_Campaign_Name)){
                    $contact["properties"]["UTM_Campaign"] = $contactZoho->UTM_Campaign_Name;
                }

                if(!empty($contactZoho->UTM_Source)){
                    $contact["properties"]["UTM_Source"] = $contactZoho->UTM_Source;
                }

                if(!empty($contactZoho->UTM_Anuncio_ID)){
                    $contact["properties"]["UTM_AnuncioID"] = $contactZoho->UTM_Anuncio_ID;
                }
                //dd($contactZoho);
                //array_push($listModified, $contact);
                array_push($emails, $contactZoho->Email);
                array_push($listModified, $salesManago->getContactService()->update("sleal@iesa.cc",$contactZoho->Email, $contact));    
            }
            
            $logs_sync = new LogsSync;
            $logs_sync->startDate = $fechaInicial;
            $logs_sync->endDate = Carbon::now();
            $logs_sync->mails = json_encode($emails);
            $logs_sync->cant = count($emails);
            $logs_sync->origin = 3;//1 create 2 update 3 (zoho)
            $logs_sync->save();
            echo "zoho to Sales Modify ". count($emails);
            //dd($listModified);
            
        }
        echo "no hay datos zoho modify";
    }

}
