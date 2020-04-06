<?php

namespace App\Http\Controllers;

use zcrmsdk\crm\crud\ZCRMRecord;
use zcrmsdk\crm\exception\ZCRMException;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use zcrmsdk\oauth\ZohoOAuth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use SimpleXMLElement;
use Redirect;
use Mail;
use PDF;    

class ZohoV2Controller extends Controller
{

    public function __construct()
    {

        $configuration=array(
                                "client_id"                 =>"1000.ITNC4MNPENXO8J42JJ8OPK184MBIVH",
                                "client_secret"             =>"84d3fc3d25f0c5145c8be101c1833896a493fc45af",
                                "redirect_uri"              =>"http://www.lafamiliaperfecta.com/",
                                "currentUserEmail"          =>"sleal@iesa.cc",
                                "token_persistence_path"    =>storage_path()."/token",
                                "apiBaseUrl"                =>"www.zohoapis.com",
                                "accounts_url"              =>"https://accounts.zoho.com",
                                "persistence_handler_class" =>""
                            ); 
        ZCRMRestClient::initialize($configuration);// only use this configuration arry and respective method//
        



    }
    public function getRecords()
    {
        /* ambito que queremos acceder <<<-------ESTO SE USA SOLO LA PRIMERA VEZ EN LA WEB DE ZOHO PARA CREAR EL PRIMER TOKEN*/
        //ZohoCRM.modules.custom.all,ZohoCRM.modules.contacts.all,ZohoCRM.modules.accounts.all,ZohoCRM.modules.deals.all,ZohoCRM.modules.events.all,ZohoCRM.modules.tasks.all,ZohoCRM.modules.calls.all,ZohoCRM.modules.invoices.all,ZohoCRM.modules.pricebooks.all,ZohoCRM.modules.salesorders.all,ZohoCRM.modules.purchaseorders.all,ZohoCRM.modules.products.all,ZohoCRM.modules.cases.all,ZohoCRM.modules.solutions.all,ZohoCRM.modules.vendors.all,ZohoCRM.modules.quotes.all,ZohoCRM.modules.ALL,ZohoCRM.settings.ALL,ZohoCRM.users.ALL,ZohoCRM.org.ALL,aaaserver.profile.ALL,ZohoCRM.settings.functions.all,ZohoCRM.functions.execute.read,ZohoCRM.functions.execute.create,ZohoCRM.settings.layout_rules.read,ZohoCRM.notifications.all

        //dd('text');
        //$oAuthClient = ZohoOAuth::getClientInstance ();
        //$grantToken = "1000.30bfcf9458cf4baee304c94e9661b31c.1d3c9bbbc7d02de9041e273172ce4526";
        //$oAuthTokens = $oAuthClient-> generateAccessToken ($grantToken);
        //var_dump($oAuthTokens);
            //API name of the module should be used

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // To 
        $param_map=array("page"=>0,"per_page"=>10); 
       //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
        $response = $moduleIns->getRecords($param_map); 
        $records = $response->getData(); 
        dd($records);
/*
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To get module instance
        $param_map = array("fields"=>"Email,Last_Name,First_Name"); // key-value pair containing all the params - optional
        $response = $moduleIns->getRecord("3424583000006323001",$param_map); // To get module record
        $record = $response->getData(); // To get response data
*/

       


    }

    public function ratingFunnel(Request $request){


///        dd($request->input('prospectoId'));
        $data=$this->validarEntregable($request->input('prospectoId'));


        if (isset($data['mensaje'])) {
              return view('rating')->with('data',$data);;
        }

       
       return view('rating')->with('data',$data);;


    }


    public function confirmarCalificacion(Request $request){

        $data=$this->validarEntregable($request->input('prospectoId'));
        

        $date = Carbon::now();
        if (isset($data['mensaje'])) {
            return view('rating')->with('data',$data);;
        }


        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // to get the instance of the module
        $inventoryRecords = array();
        /**
         * Following methods are being used only by same Inventory only  *
         */
        $record = ZCRMRecord::getInstance("Deals", $request->input('prospectoId')); // to get the instance of the record
        $record->setFieldValue("Rating_total_del_servicio_de_instalaci_n", $request->input('calidad'));
        $record->setFieldValue("Mensaje_rating_de_instalaci_n", $request->input('mensaje'));

        array_push($inventoryRecords, $record); // pushing the record to the array

        $trigger=array();//triggers to include
        $responseIn = $moduleIns->updateRecords($inventoryRecords,$trigger);
        $zohoRespuesta=$responseIn->getEntityResponses(); 
        

        if($zohoRespuesta[0]->getStatus()=='success'){
            return redirect()->route('gracias');
        }else{
            $data['mensaje']='POR FAVOR COMUNÍCATE CON TU CONTACTO DIRECTO DE WIZERLINK.';
            return view('propuesta-aprobacion.notificacion')->with('data',$data); 
        }

    }


    public function validarEntregable($prospectoId){

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // To get module instance
        $param_map = array("fields"=>"Stage,Marca,Cuenta,Contact_Name,Rating_total_del_servicio_de_instalaci_n"); // key-value pair containing all the params - optional
        $response = $moduleIns->getRecord($prospectoId,$param_map); // To get module record
        $record = $response->getData(); // To get response data


        $marca=null;
        foreach ($record->getFieldValue("Marca") as $key => $cadena) {
            if ($key==0) {
                $marca=$marca.' '. $cadena;
            }else{
                $marca=$marca.', '. $cadena;
            }
        }


            $data = array  (  
                            'prospectoId' =>$prospectoId,
                            'marca' =>$marca,
                            'contadorMarcas' =>count($record->getFieldValue("Marca")),
                            'status' => $record->getFieldValue("Stage"),
                            'rating' =>$record->getFieldValue("Rating_total_del_servicio_de_instalaci_n"),
                            'contactName' => $record->getFieldValue("Contact_Name")->getLookupLabel(),
                        );


        if($data['status']=='Equipo Instalado' && $data['rating']===null ){

        }elseif($data['status']=='Equipo Instalado' && !empty($data['rating'])){
            $data['mensaje']='Ya hemos recibido tu rating. Si deseas comunicarte con nuestro equipo, contáctanos al <a ref="tel:+5215552809648">Tel.: +52 (1) 55 5280 9648</a>';

        }elseif($data['status']!='Equipo Instalado'){
            
            abort(404);     

        }else{
            abort(404);
        }

        return $data;

    }



   
}

 
