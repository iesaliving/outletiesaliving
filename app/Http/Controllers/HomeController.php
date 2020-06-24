<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Api\SalesManago;
use Pixers\SalesManagoAPI\Client;
use Pixers\SalesManagoAPI\SalesManago;
use zcrmsdk\oauth\ZohoOAuth;
use GuzzleHttp\Client as GzClient;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $configuration=array(
            "client_id"                 =>"1000.ITNC4MNPENXO8J42JJ8OPK184MBIVH",
            "client_secret"             =>"84d3fc3d25f0c5145c8be101c1833896a493fc45af",
            "redirect_uri"              =>"http://www.lafamiliaperfecta.com/",
            "currentUserEmail"          =>"sleal@iesa.cc",
            "token_persistence_path"    =>storage_path()."/token",
            "apiBaseUrl"                =>"www.zohoapis.com/",
            "accounts_url"              =>"https://accounts.zoho.com",
            "persistence_handler_class" =>""
        ); 
       // ZCRMRestClient::initialize($configuration);// only use this configuration arry and respective method//
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


    public function test(Request $request){
        /* FUNCIONA
        $client = new Client('o28qhomp7m09zozm', "https://app3.salesmanago.pl/api/", 'kvi2rweud3qlrov3h7lvwbisf8lhcs47', 'nzl7tyqare1ac1rxoeba0vqf7du7pj6o');
        // Then - initialize SalesManago Services Locator
        $salesManago = new SalesManago($client);

        $contactResponse = $salesManago->getContactService()->listRecentlyCreated("Auxiliarmkt@iesa.cc", array(
            "from" => 1592265600000,
            "to" => 1592351999000
        ));
        
        $contacts = $contactResponse->createdContacts;
        $emails = array();
        foreach($contacts as $contact){
            array_push($emails, $contact->email);
        }

        $contactsList = $salesManago->getContactService()->listByEmails("Auxiliarmkt@iesa.cc", array(
            "email" => $emails
        )); 
        dd($contactsList);
        
        $configuration=array(
            "client_id"                 =>"1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H",
            "client_secret"             =>"f5f87419d96e9bce999e108588af8eab175b23d8a4",
            "redirect_uri"              =>"http://www.lafamiliaperfecta.com/",
            "currentUserEmail"          =>"sleal@iesa.cc",
            "token_persistence_path"    =>storage_path()."/token",
            "apiBaseUrl"                =>"www.zohoapis.com",
            "accounts_url"              =>"https://accounts.zoho.com",
            "persistence_handler_class" =>"",
            "scopes" => "ZohoCRM.modules.Leads.ALL"
        ); 
        
        */

        /*
        $configuration =array(
            "client_id"=>"1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H",
            "client_secret"=>"f5f87419d96e9bce999e108588af8eab175b23d8a4",
            // "apiBaseUrl" =>"http://www.zohoapis.com%26quot%3B./",
            "apiBaseUrl" =>"http://www.zohoapis.com/",
            //"token_persistence_path"    =>storage_path()."/tokenbd",
            "redirect_uri"=>"http%3A%2F%2Fwww.lafamiliaperfecta.com%2F",
            "currentUserEmail"=>"sleal@iesa.cc"
        );
        
        ZCRMRestClient::initialize($configuration);
        $oAuthClient = ZohoOAuth::getClientInstance();
        //dd($oAuthClient);
        $grantToken = "1000.894bb104208580ad1e09702cbfdcdde3.54bba7cf24fa5d861666cc7a737ece4d";
        $oAuthTokens = $oAuthClient->generateAccessToken($grantToken);
        
        dd($oAuthTokens);
        */

        // generate access token 
        $configuration = array(
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
            "apibaseurl"=>"www.zohoapis.com");


        ZCRMRestClient::initialize($configuration);
            
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
            "select_query" => "select Last_Name, First_Name, Full_Name, Created_Time
            from Leads
            where Created_Time between '2020-03-11T10:33:32+05:30' and  '2020-03-12T10:33:32+05:30'
            limit 2"
        );



         $ch =   curl_init($url);
         //curl_setopt($ch, CURLOPT_HTTPHEADER,$this->headers);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: Zoho-oauthtoken '.$oAuthTokens ));
         curl_setopt($ch, CURLOPT_POST, 1); 
         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json)); 
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
         $response2 = curl_exec($ch);
         curl_close($ch);

        dd(json_decode($response2));

        // code for to refresh token


        // code for to execute COQL



        /* this understand
        $configuration = array("client_id"=>"1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H","client_secret"=>"f5f87419d96e9bce999e108588af8eab175b23d8a4","redirect_uri"=>"http://www.lafamiliaperfecta.com/","currentUserEmail"=>"sleal@iesa.cc","apibaseurl"=>"www.zohoapis.com");
        ZCRMRestClient::initialize($configuration);
        
        $zcrmModuleIns = ZCRMModule::getInstance("Leads");
        $bulkAPIResponse=$zcrmModuleIns->getRecords();
        $recordsArray = $bulkAPIResponse->getData();
        var_dump($recordsArray);
        
        */





       /*
      $client = new GzClient(); //GuzzleHttp\Client
      $result = $client->post('https://accounts.zoho.com/oauth/v2/token', [
          'query' => [
              "code" => "1000.dac9a46e9090ab6b800370898b5dc46c.cd0d5ad51c47a3fc2bde8740c8802cfe",
              'client_id' => "1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H",
              'client_secret' => "f5f87419d96e9bce999e108588af8eab175b23d8a4",
              "redirect_uri"              =>"http://www.lafamiliaperfecta.com/",
              //'redirect_uri' => "http%3A%2F%2Fwww.lafamiliaperfecta.com%2F",
              'currentUserEmail' => "sleal@iesa.cc",
              "grant_type"=> "authorization_code"
              ]
              ]);// scope ZohoCRM.modules.All
              dd($result); 
              */
              
              
              
              /* this work
              $urlbase = "https://accounts.zoho.com/oauth/v2/token";
              $json = array(
                  "code" => "1000.62f9c269834236f7300126b8b5ca36c6.b627a5ba2d67d5c94d63aaa3f27a4612",
                  "client_id" => "1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H",
                  "client_secret" => "f5f87419d96e9bce999e108588af8eab175b23d8a4",
                  'redirect_uri' => "http%3A%2F%2Fwww.lafamiliaperfecta.com%2F",
                  "grant_type"=> "authorization_code"
                );

                $url = $urlbase."?".http_build_query($json) ;

                $ch =   curl_init($url);
                //curl_setopt($ch, CURLOPT_HTTPHEADER,$this->headers);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                curl_setopt($ch, CURLOPT_POST, 1); 
                //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json)); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
                $response2 = curl_exec($ch);
                curl_close($ch);
                //return json_decode(stripslashes($response2),true);  

                $response_token = json_decode($response2);

                $configuration =array(
                    "client_id"=>"1000.8I0OBMDRJ1ZMWX9T19X47YVVQ7PT6H",
                    "client_secret"=>"f5f87419d96e9bce999e108588af8eab175b23d8a4",
                    "redirect_uri"=>"http%3A%2F%2Fwww.lafamiliaperfecta.com%2F",
                    "currentUserEmail"=>  "sleal@iesa.cc"
                );
                
                ZCRMRestClient::initialize($configuration);
                $oAuthClient = ZohoOAuth::getClientInstance(); 
                $refreshToken = $response_token->refresh_token; 
                $userIdentifier = $configuration["currentUserEmail"]; 
                $oAuthClient->generateAccessTokenFromRefreshToken($refreshToken,$userIdentifier);
                
                dd($request);
                
                */
        
        /*
        dd($oAuthTokens);

        $json = array("select_query" => "select First_Name from Leads limit 2");
        $url = "https://www.zohoapis.com/crm/v2/coql";
        $ch =   curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPHEADER,["Authorization: Zoho-oauthtoken 1000.cfddda8117ae0a2c3a011393826d7ae4.74e7ea815e90cadfb0e26870cb609c01"]);
                curl_setopt($ch, CURLOPT_POST, 1); 
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json)); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
                $response2 = curl_exec($ch);
                curl_close($ch);
        return json_decode(stripslashes($response2),true);
            */

        /*
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads");
        dd($moduleIns->getAllFields());
        */
      
    }
}
