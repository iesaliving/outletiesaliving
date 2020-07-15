<?php

namespace App\Http\Controllers;

use zcrmsdk\crm\crud\ZCRMRecord;
use Illuminate\Http\Request;
use Pixers\SalesManagoAPI\Client;
use Pixers\SalesManagoAPI\SalesManago;
use zcrmsdk\oauth\ZohoOAuth;
use GuzzleHttp\Client as GzClient;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    /*
    public function test()
    {
        $salesmanago = new SalesManago();
        
        $dt = Carbon::createFromDate(2020, 6, 16, "America/Caracas");
        //dd($dt->copy()->startOfDay()->timestamp*1000, $dt->copy()->endOfDay()->timestamp*1000);
        //return
        $reqContactListCreated =  $salesmanago->getCredentials(); // api_key, secret_key, sha
        $reqContactListCreated["requestTime"] = Carbon::now()->timestamp * 1000;
        $reqContactListCreated["owner"] = 'Auxiliarmkt@iesa.cc';
        $reqContactListCreated["from"] = 1592265600000; // hoy a las 12:00: am (inicio del dia)
        $reqContactListCreated["to"] =  1592351999000; // hoy hora actual.
        //work 
        //$reqContactListCreated["from"] = $today->copy()->startOfDay();//->format('Y-m-d H:i');
        //$reqContactListCreated["to"] =  Carbon::now();//->format('Y-m-d H:i');

        //return $reqContactListCreated;
        // response API 
        $resContactListCreated = $salesmanago->curlSm("https://app3.salesmanago.pl/api/contact/createdContacts", json_encode($reqContactListCreated));
        //return sizeof($resContactListCreated["createdContacts"]);
        if(!empty($resContactListCreated) && $resContactListCreated["success"]){
            if(sizeof($resContactListCreated["createdContacts"]) > 0){
                $contactsIds = array();
                foreach($resContactListCreated["createdContacts"] as $created){
                    array_push($contactsIds, strtolower($created["email"]));
                }
                //return $contactsIds;
                $salesmanago2 = new SalesManago();
                $reqDataContactCreated = $salesmanago2->getCredentials();
                $reqDataContactCreated["requestTime"] = Carbon::now()->timestamp * 1000;
                $reqDataContactCreated["email"] = $contactsIds;//array("valo_379@hotmail.com", "therasmus12041204@gmail.com");//$contactsIds;
                $reqDataContactCreated["owner"]  = $reqContactListCreated["owner"];
                //return $reqDataContactCreated;
                $resDataContactListCreated = $salesmanago->curlSm("https://app3.salesmanago.pl/api/contact/list", json_encode($reqDataContactCreated));
                
                return $resDataContactListCreated;
            }
            return 'no hay data disponible';
        }
        return 'error en la consulta';
    }
    */


    public function sales(Request $request){
        $client = new Client('o28qhomp7m09zozm', "https://app3.salesmanago.pl/api/", 'kvi2rweud3qlrov3h7lvwbisf8lhcs47', 'nzl7tyqare1ac1rxoeba0vqf7du7pj6o');
        // Then - initialize SalesManago Services Locator
        $salesManago = new SalesManago($client);
        
        /* FUNCIONA
        $contactResponse = $salesManago->getContactService()->listRecentlyCreated("Auxiliarmkt@iesa.cc", array(
        //$contactResponse = $salesManago->getContactService()->listRecentlyModified("Auxiliarmkt@iesa.cc", array(
            "from" => 1592956800000,
            "to" => 1593043199000
        ));

        //$contacts = $contactResponse->modifiedContacts; // created Contacts response
        $contacts = $contactResponse->createdContacts; // created Contacts response
        //dd($contacts);
        
        /*
        foreach($contacts as $contact){
            array_push($emails, $contact->email);
        }
        */
        $emails = array("jeanpierre@mailinator.com", "jeanpaul@mailinator.com", "scarlet@mailinator.com");
        if(sizeof($emails) > 0) // si hay correos para crear
        {
            $contactsList = $salesManago->getContactService()->listByEmails("Auxiliarmkt@iesa.cc", array(
                // ejm:  $emails => array("jeanpierre@mailinator.com", "jeanpaul@mailinator.com", "scarlet@mailinator.com")
                "email" => $emails
            )); 
            //dd($contactsList);
            //* sync zoho
            // generate access token 
            ZCRMRestClient::initialize(array(
                "client_id"=>"1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H",
                "token_persistence_path"=> 'C:\xampp\htdocs\IESA\storage\token', // this path is 
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
           
            if($contactsList && sizeof($contactsList->contacts) > 0){
                foreach($contactsList->contacts as $contact)
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

                    if(isset($custom->firstWhere('name', 'fecha_showroom')->value)){                        
                        $dateShowroom = explode('-', $custom->firstWhere('name', 'fecha_showroom')->value);
                        $record->setFieldValue("Fecha_de_visita_al_Showroom", Carbon::create($dateShowroom[2], $dateShowroom[1], $dateShowroom[0])->format('Y-m-d'));
                    }

                    if(isset($custom->firstWhere('name', 'hora_showroom')->value)){
                        $record->setFieldValue("Hora_de_visita_al_showroom", $custom->firstWhere('name', 'hora_showroom')->value );
                    }

                    if(isset($custom->firstWhere('name', 'fecha_cooking_demo')->value)){
                        $dateCookingDemo = explode('-', $custom->firstWhere('name', 'fecha_cooking_demo')->value);
                        $record->setFieldValue("Fecha_de_cooking_demo", Carbon::create($dateCookingDemo[2], $dateCookingDemo[1], $dateCookingDemo[0])->format('Y-m-d'));
                    }

                    if(isset($custom->firstWhere('name', 'fecha_llamada')->value)){
                        $record->setFieldValue("Fecha_de_la_llamada", $custom->firstWhere('name', 'fecha_llamada')->value );
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

                    array_push($records, $record);
                }
                
                $response = $moduleLeads->upsertRecords($records,null,null,null); // updating the records.
        
                $zoho_response= $response->getEntityResponses();
                dd($zoho_response);
                
            }
            return "no se encontraron user en este periodo";
            //*/ // salesmanago end script
     
        }
    
    }

    public function zoho(Request $request){
        // zoho script 
        $client = new Client('o28qhomp7m09zozm', "https://app3.salesmanago.pl/api/", 'kvi2rweud3qlrov3h7lvwbisf8lhcs47', 'nzl7tyqare1ac1rxoeba0vqf7du7pj6o');
        // Then - initialize SalesManago Services Locator
        $salesManago = new SalesManago($client);

        ZCRMRestClient::initialize(array(
            "client_id"=>"1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H",
            "token_persistence_path"=> 'C:\xampp\htdocs\IESA\storage\token', // this path is 
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

        $url = "https://www.zohoapis.com/crm/v2/coql";
        $json = array (
            "select_query" => "select Full_Name, Email, Phone, Description, Estado, Marca, Producto, Fecha_de_visita_al_Showroom, Hora_de_visita_al_showroom, Fecha_de_cooking_demo, Fecha_de_la_llamada, Hora_de_la_llamada, UTM_Anuncio_ID, UTM_Campaign_Name, UTM_Source, Lead_Source, Created_Time, Modified_Time
            from Leads
            where Email in('jeanpierre@mailinator.com', 'jeanpaul@mailinator.com', 'scarlet@mailinator.com')"
        );
        /*$json = array (
            "select_query" => "select Full_Name, Email, Phone, Description, Estado, Marca, Producto, Fecha_de_visita_al_Showroom, Hora_de_visita_al_showroom, Fecha_de_cooking_demo, Fecha_de_la_llamada, Hora_de_la_llamada, UTM_Anuncio_ID, UTM_Campaign_Name, UTM_Source, Lead_Source, Created_Time, Modified_Time
            from Leads
            where Modified_Time between '2020-07-14T13:51:08-05:00' and  '2020-07-14T15:51:08-05:00'"
        );*/

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
            
            foreach( $contactsZoho->data as $contactZoho){
              
                $contact = array();
                $contact["contact"]["name"] = $contactZoho->Full_Name;
                //$contact["async"] = false;
                
                if(!empty($contactZoho->Phone)){
                    $contact["contact"]["phone"] = $contactZoho->Phone;
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

                if($contactZoho->Email == "jeanpierre@mailinator.com"){
                    dd($salesManago->getContactService()->update("Auxiliarmkt@iesa.cc",$contactZoho->Email, $contact));
                }
                dd($contact);
                //array_push($listModified, $salesManago->getContactService()->update("Auxiliarmkt@iesa.cc",$contactZoho->Email, $contact));
                //dd($salesManago->getContactService()->update("Auxiliarmkt@iesa.cc",$contactZoho->Email, $contact));
            }
            
            //dd($listModified);
            /* funciona 
            $update = $salesManago->getContactService()->update("Auxiliarmkt@iesa.cc", "jeanpaul@mailinator.com",  array( 
                "contact" => array(
                    "name" => "jeanpaul III", 
                    "phone" => "04245555555"
                ),
                "properties" => array(
                    "brand" => "Asko",
                    "estado" => "Guerrero",
                    "mensaje" => "prueba de Zoho a Sales"
                    )
                )); 
                dd($update);
                */
        }
        echo "no hay datos";
    }
}  