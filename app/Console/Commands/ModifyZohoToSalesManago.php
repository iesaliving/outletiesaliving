<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use zcrmsdk\crm\crud\ZCRMRecord;
use Pixers\SalesManagoAPI\Client;
use Pixers\SalesManagoAPI\SalesManago;
use zcrmsdk\oauth\ZohoOAuth;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use App\LogsSync;

class ModifyZohoToSalesManago extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:modifyzoho';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia los usuarios modificados de Zoho a SalesManago en un rango de fecha';

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
        // zoho script 
        set_time_limit(0);
        $client = new Client('o28qhomp7m09zozm', "https://app3.salesmanago.pl/api/", 'kvi2rweud3qlrov3h7lvwbisf8lhcs47', 'nzl7tyqare1ac1rxoeba0vqf7du7pj6o');
        // Then - initialize SalesManago Services Locator
        $salesManago = new SalesManago($client);

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
        
       $json = array (
           "select_query" => "select Full_Name, Email, Phone, Description, Estado, Marca, Producto, Fecha_de_visita_al_Showroom, Hora_de_visita_al_showroom, Fecha_de_cooking_demo, Fecha_de_la_llamada, Hora_de_la_llamada, UTM_Anuncio_ID, UTM_Campaign_Name, UTM_Source, Lead_Source, Created_Time, Modified_Time, SalesManago_Contact_ID
           from Leads
           where Modified_Time between '".Carbon::createFromDate(2020, 7, 16)->startOfDay()->toIso8601String()."' and  '". Carbon::now()->endOfDay()->toIso8601String() ."'"
       );//Carbon::createFromDate(2020, 7, 31)->
       /*
       $json = array (
       "select_query" => "select Full_Name, Email, Phone, Description, Estado, Marca, Producto, Fecha_de_visita_al_Showroom, Hora_de_visita_al_showroom, Fecha_de_cooking_demo, Fecha_de_la_llamada, Hora_de_la_llamada, UTM_Anuncio_ID, UTM_Campaign_Name, UTM_Source, Lead_Source, Created_Time, Modified_Time, SalesManago_Contact_ID
       from Leads
       where Modified_Time between '".$fechaInicial->toIso8601String()."' and  '". $startDate->toIso8601String() ."'"
       );
       $json = array (
       "select_query" => "select Full_Name, Email, Phone, Description, Estado, Marca, Producto, Country , Fecha_de_visita_al_Showroom, Hora_de_visita_al_showroom, Fecha_de_cooking_demo, Fecha_de_la_llamada, Hora_de_la_llamada, UTM_Anuncio_ID, UTM_Campaign_Name, UTM_Source, Lead_Source, Created_Time, Modified_Time, SalesManago_Contact_ID
       from Leads
       where Email in('Marco@wizerlink.net','MMendoza.mkt@gmail.com','mendozaweffer@gmail.com','Administracion@wizerlink.net','Jane@wizerlink.net','Jane@wizerlink.com','Projects@wizerlink.com',
       'jeanpierre@mailinator.com', 'jeanpaul@mailinator.com', 'scarlet@mailinator.com', 'sem@ctrl-ad.com','leads.webforms@gmail.com','uniquemx.mkt@gmail.com')"
       );
       $json = array (
       "select_query" => "select Full_Name, Email, Phone, Description, Estado, Marca, Producto, Country , Fecha_de_visita_al_Showroom, Hora_de_visita_al_showroom, Fecha_de_cooking_demo, Fecha_de_la_llamada, Hora_de_la_llamada, UTM_Anuncio_ID, UTM_Campaign_Name, UTM_Source, Lead_Source, Created_Time, Modified_Time, SalesManago_Contact_ID
       from Leads
       where SalesManago_Contact_ID in( '0fe7d50d-97ce-4725-828f-f1f43bc78f5e','1ae96687-76d2-45bd-8506-d84d86ad414f','ca5bdffc-f24f-4417-a5ac-01adb1e3437c','c5c45fa4-5b89-4b7e-93c1-956dd5cfe864','8f51b548-882f-47ee-b2f3-683239283c44','42813018-1d1f-415b-bc44-3980a0dce3fe','3ab1c66f-d251-48df-bb73-dccae86f0927','ebdb064a-280b-4960-8920-98c94be24bc6','3c178c82-1131-4c32-960a-d027a395799e','64cf98f8-d560-4a5a-a2d4-0514a8d55669')"
       );
       */

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
       //dd(array_slice($contactsZoho->data, 100));
       if(isset($contactsZoho) && sizeof($contactsZoho->data) > 0 ){
            $listModifiedSales = array(); 
            $emails = array();
            $moficacionesFZOHO = array();
            //dd($contactsZoho);

            // usuarios que ya han sido cargados en zoho con el id de salesmanago
            $contactosConId = array_filter($contactsZoho->data, function ($contacto) {
                return $contacto->SalesManago_Contact_ID != null;
            });
    
            // usuarios que NO han sido cargados en zoho con el id de salesmanago
            $contactosSinId = array_filter($contactsZoho->data, function ($contacto) {
                return $contacto->SalesManago_Contact_ID == null;
            });

            unset($contactsZoho);
            
            if(sizeof($contactosConId)>0){
                foreach($contactosConId as $contactZoho){
                    
                    $contact = array();
                    $contact["contact"]["name"] = $contactZoho->Full_Name;
                    $contact["async"] = false;
                    
                    if(!empty($contactZoho->Phone) && $contactZoho->Phone !== "0000000000"){
                        $contact["contact"]["phone"] = $contactZoho->Phone;
                    }
                    
                    if(isset($contactZoho->Marca) && sizeof($contactZoho->Marca) > 0 ){
                        $contact["properties"]["brand"] = implode(",", $contactZoho->Marca);
                    }

                    if(isset($contactZoho->Country) && !empty($contactZoho->Country)){
                        $contact["properties"]["pais"] = $contactZoho->Country;
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
                    array_push($listModifiedSales, $salesManago->getContactService()->upsert("sleal@iesa.cc",$contactZoho->Email, $contact));    
                    unset($contact);
                    
                }
                unset($contactZoho);
            }
            unset($contactosConId);
            
            // esto en algun futuro no sera necesario
            //dd($contactosSinId);
            if(sizeof($contactosSinId)>0){
                $contactosSinId = array_slice($contactosSinId, 3);
                foreach($contactosSinId as $contactZoho){
                    
                    $contact = array();
                    
                    $contact["contact"]["name"] = $contactZoho->Full_Name;
                    $contact["async"] = false;
                    if(!empty($contactZoho->Phone) && $contactZoho->Phone !== "0000000000"){
                        $contact["contact"]["phone"] = $contactZoho->Phone;
                    }
                    
                    if(isset($contactZoho->Marca) && sizeof($contactZoho->Marca) > 0 ){
                        $contact["properties"]["brand"] = implode(",", $contactZoho->Marca);
                    }
                    
                    if(isset($contactZoho->Country) && !empty($contactZoho->Country)){
                        $contact["properties"]["pais"] = $contactZoho->Country;
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
                    array_push($emails, $contactZoho->Email);                    
                    array_push($listModifiedSales, $salesManago->getContactService()->upsert("sleal@iesa.cc",$contactZoho->Email, $contact));         
                    unset($contact);   
                    //*/
                }
                unset($contactZoho);
            }
            unset($contactosSinId);
            //dd($listModifiedSales);
            /*
            if(sizeof($moficacionesFZOHO))
            {
                //dd("moficacionesFZOHO", $moficacionesFZOHO);
                $loteRecords = array_chunk($moficacionesFZOHO, 90); // de 90 en 90 => el maximo es 100 record por upsert
                
                foreach($loteRecords as $lote){
                    $responseIn[] = $moduleLeads->updateRecords($lote);    
                }
                dd($responseIn);
            }*/

            $logs_sync = new LogsSync;
            $logs_sync->startDate = $fechaInicial;
            $logs_sync->endDate = Carbon::now();
            $logs_sync->mails = json_encode($emails);
            $logs_sync->cant = count($emails);
            $logs_sync->origin = 3;//1 create 2 update 3 (zoho)
            $logs_sync->save();
            echo "zoho to Sales Modify ". count($emails);
            dd($listModified);
            
        }

    }
}
