<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
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
              //dd($listModified);
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
          //echo "no hay datos zoho modify";
    }
}
