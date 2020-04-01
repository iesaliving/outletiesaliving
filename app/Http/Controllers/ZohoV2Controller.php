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

    public function ratingFunnel1(Request $request){

        $data=$this->validarEntregable($request->input('entregableId'));


        if (isset($data['mensaje'])) {
              return view('propuesta-aprobacion.notificacion')->with('data',$data);
        }

       
       return view('rating-funnel.rating-1')->with('data',$data);;


    }
    public function calificacion(Request $request){

        $data=$this->validarEntregable($request->entregableId);
        if (isset($data['mensaje'])) {
            return view('propuesta-aprobacion.notificacion')->with('data',$data);
        }

        return view('rating-funnel.rating-4')->with('entregableId',$request->entregableId);

    }

    public function confirmarCalificacion(Request $request){

        dd($request->input());
        $data=$this->validarEntregable($request->input('entregableId'));
        

        $date = Carbon::now();
        if (isset($data['mensaje'])) {
            return view('propuesta-aprobacion.notificacion')->with('data',$data);
        }


        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Entregables"); // to get the instance of the module
        $inventoryRecords = array();
        /**
         * Following methods are being used only by same Inventory only  *
         */
        $record = ZCRMRecord::getInstance("Entregables", $request->input('entregableId')); // to get the instance of the record
        $record->setFieldValue("Rating_Calidad_del_entregable", $request->input('calidad'));
        $record->setFieldValue("Rating_de_cliente", $request->input('project-manager'));
        $record->setFieldValue("Rating_Tiempo_de_Entrega", $request->input('tiempo'));
        $record->setFieldValue("Fecha_de_aprobaci_n_final", $date->format('Y-m-d'));
        $record->setFieldValue("Categor_a", 'Aprobado por cliente');

        array_push($inventoryRecords, $record); // pushing the record to the array

        $trigger=array();//triggers to include
        $responseIn = $moduleIns->updateRecords($inventoryRecords,$trigger);
        $zohoRespuesta=$responseIn->getEntityResponses(); 
        

        if($zohoRespuesta[0]->getStatus()=='success'){
            return redirect()->route('entregableCalifiGracias');
        }else{
            $data['mensaje']='POR FAVOR COMUNÍCATE CON TU CONTACTO DIRECTO DE WIZERLINK.';
            return view('propuesta-aprobacion.notificacion')->with('data',$data); 
        }

    }

    public function cambiosEntregable(Request $request){

        $data=$this->validarEntregable($request->entregableId);

        if (isset($data['mensaje'])) {
            return view('propuesta-aprobacion.notificacion')->with('data',$data);
        }

        return view('rating-funnel.rating-2')->with('entregableId',$request->entregableId);
    }


    public function confirmarCambiosEntregable(Request $request){

        $data=$this->validarEntregable($request->input('entregableId'));
        $date = Carbon::now();
        if (isset($data['mensaje'])) {
            return view('propuesta-aprobacion.notificacion')->with('data',$data);
        }


        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Entregables"); // to get the instance of the module
        $inventoryRecords = array();
        /**
         * Following methods are being used only by same Inventory only  *
         */
        $record = ZCRMRecord::getInstance("Entregables", $request->input('entregableId')); // to get the instance of the record
        $record->setFieldValue("Ajustes_solicitados_por_cliente", $request->input('mensaje'));
        $record->setFieldValue("Fecha_de_solicitude_de_ajustes", $date->format('Y-m-d'));
        $record->setFieldValue("Categor_a", 'Requiere ajuste');

        array_push($inventoryRecords, $record); // pushing the record to the array

        $trigger=array();//triggers to include
        $responseIn = $moduleIns->updateRecords($inventoryRecords,$trigger);
        $zohoRespuesta=$responseIn->getEntityResponses(); 
        

        if($zohoRespuesta[0]->getStatus()=='success'){
             return redirect()->route('entregableCambiosGracias');
        }else{
            $data['mensaje']='POR FAVOR COMUNÍCATE CON TU CONTACTO DIRECTO DE WIZERLINK.';
            return view('propuesta-aprobacion.notificacion')->with('data',$data); 
        }

    }



    public function validarEntregable($entregableId){

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Entregables"); // To get module instance
        $param_map = array("fields"=>"URL_de_entrega,Categor_a,Cuenta,Name,Contacto_que_aprueba"); // key-value pair containing all the params - optional
        $response = $moduleIns->getRecord($entregableId,$param_map); // To get module record
        $record = $response->getData(); // To get response data

            $data = array  (  
                            'entregableId' =>$entregableId,
                            'linkEntrega' => $record->getFieldValue("URL_de_entrega"),
                            'status' => $record->getFieldValue("Categor_a"),
                            'contactName' => $record->getFieldValue("Contacto_que_aprueba"),
                        );
        if($data['status']=='Por aprobación de cliente'){
            
        }elseif($data['status']=='Aprobado por cliente'){
            $data['mensaje']='YA ESTE ENTREGABLE FUE APROBADO. SI NECESITAS REALIZAR ALGÚN CAMBIO, POR FAVOR COMUNÍCATE CON TU CONTACTO DIRECTO DE WIZERLINK.';
        }elseif($data['status']=='Requiere ajuste'){
            $data['mensaje']='YA HEMOS RECIBIDO TU SOLICITUD DE CAMBIOS. SI NECESITAS CONTACTARNOS, POR FAVOR COMUNÍCATE CON TU CONTACTO DIRECTO DE WIZERLINK.';
        }else{
            $data['mensaje']='ESTA PROPUESTA ESTA EN PROCESO SI NECESITAS ALGO, POR FAVOR COMUNÍCATE CON TU CONTACTO DIRECTO DE WIZERLINK.';
        }

        return $data;

    }



   
}

 
