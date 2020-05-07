<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use zcrmsdk\crm\exception\ZCRMException;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use zcrmsdk\crm\crud\ZCRMRecord;
use zcrmsdk\oauth\ZohoOAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use SimpleXMLElement;
use Redirect;
use Auth;





class DealsController extends Controller
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
    

    public function index()
    {
        return view('admin.deals.index');
    }


    public function table()
    {


        if (Auth::user('email')->email=='admin@admin.com') {
            
            $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // To 
            $param_map=array("page"=>0,"per_page"=>200); 
           //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
            $response = $moduleIns->getRecords($param_map); 
            $records = $response->getData(); 
        }else{
            $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // To get module instance
            $criteria="Representante_email:equals:".Auth::user('email')->email;
            //criteria to search for
            /* For VERSION <=2.0.6  $page=5;//page number
            $perPage=200;//records per page
            $response = $moduleIns->searchRecordsByCriteria($criteria, $page, $perPage); // To get module records//string $searchWord word to be searched//number $page to get the list of records from the respective pages. Default value for page is 1.//number $perPage To get the list of records available per page. Default value for per page is 200.*/
             $param_map=array("page"=>1,"per_page"=>200); // key-value pair containing all the parameters
            $response = $moduleIns->searchRecordsByCriteria($criteria,$param_map) ;// To get module records// $criteria to search for  to search for// $param_map-parameters key-value pair - optional
            $records = $response->getData(); // To get response data
        }

        //dd($records);
        $deals = array();
        foreach ($records as $key => $record) {
            $deals[$key] = array (  
                                    'id' => base64_encode($records[$key]->getEntityId()),
                                    'contactName' => $record->getFieldValue("Contact_Name")->getLookupLabel(),
                                    'stage' => $records[$key]->getFieldValue('Stage'), 
                                    'representante' => $records[$key]->getFieldValue('Representante'),
                                    'email' =>$this->getContact($records[$key]->getFieldValue("Contact_Name")->getEntityId()),
                                );

            $time=explode('T', $records[$key]->getCreatedTime());
            $fecha=explode('-', $time[0]);
            $deals[$key]['fecha']=$fecha[2].'-'.$fecha[1].'-'.$fecha[0];
        }
        //dd($deals);
       // dd($records);

        $respuesta['data'] = $deals;
        echo json_encode($respuesta);
    }

    public function create(){



        $marcas=$this->fields('4434756000000273884','Deals');//id Fiels Obtenidos de $this->campos()

        $ubicaciones=$this->fields('4434756000000271820','Deals');//id Fiels Obtenidos de $this->campos()

        $stages=$this->fields('4434756000000002565','Deals');//id Fiels Obtenidos de $this->campos()

        $dealers=$this->dealers();

        $accounts=$this->accounts();

        $contacts=$this->contacts();

        $repres=$this->representantes();

        $nameRepres=$this->nombreRepresentantes();

        return view('admin.deals.form', compact('contacts','accounts','marcas', 'ubicaciones' , 'stages' , 'repres','nameRepres','dealers'));
    }

    public function store(Request $request){

        
        //dd($request->input());

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // to get the instance of the module


        $old_date = explode('-', $request->input('Closing_Date'));
        $new_data= $old_date[2].'-'.$old_date[1].'-'.$old_date[0];



        $records = array();
        $record = ZCRMRecord::getInstance(null, null); // THIS LINE
        $record->setFieldValue("Deal_Name", $request->input('Deal_Name'));
        $record->setFieldValue("Stage", $request->input('Stage'));
        $record->setFieldValue("Account_Name", $request->input('Account_Name'));
        $record->setFieldValue("Monto_estimado_del_orden_de_compra", $request->input('monto_estimado'));
        $record->setFieldValue("Type", 'Consumidor');
        $record->setFieldValue("Contact_Name", $request->input('Contact_Name'));
        $record->setFieldValue("Closing_Date",$new_data);
        $record->setFieldValue("Contact_Apellido", $request->input('Contact_Apellido'));
        $record->setFieldValue("Estado", $request->input('ubicacion'));
        $record->setFieldValue("Next_Step", $request->input('Next_Step'));
        $record->setFieldValue("Dealer2", $request->input('dealerId'));
        $record->setFieldValue("Marca", $request->input('marca'));
        $record->setFieldValue("Email_de_Dealer", $request->input('Email_de_Dealer'));
        $record->setFieldValue("Producto", $request->input('producto'));
        $record->setFieldValue("Lead_Source", $request->input('Lead_Source'));
        $record->setFieldValue("Representante", $request->input('Representante'));
        $record->setFieldValue("Dealer", $request->input('dealerId'));
        $record->setFieldValue("Nombre_de_vendedor_de_dealer", $request->input('dealer_name'));
        $record->setFieldValue("Representante", $request->input('Representante'));
        $record->setFieldValue("Representante_email", $request->input('Representante_email'));


        
        array_push($records, $record); // pushing the record to the array
       // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $responseIn = $moduleIns->createRecords($records,null,$lar_id,null); 

        $zohoRespuesta=$responseIn->getEntityResponses();



        if($zohoRespuesta[0]->getStatus()!='success'){
           abort(404);
        }

          $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        

        \Session::flash('notification', $notification);

        return redirect()->route('admin.deals.index');


    }

    public function edit(Request $request){

        $record= $this->validarDeals($request->input('dealsId'));



        $old_date = explode('-', $record->getFieldValue("Closing_Date"));
        $new_data= $old_date[2].'-'.$old_date[1].'-'.$old_date[0];


        $arrayData['dealsId']=$request->input('dealsId');
        $arrayData['Deal_Name']=$record->getFieldValue("Deal_Name");
        $arrayData['Stage']=$record->getFieldValue("Stage");
        $arrayData['monto_estimado']=$record->getFieldValue("Monto_estimado_del_orden_de_compra");
        $arrayData['Closing_Date']=$new_data;
        $arrayData['Contact_Apellido']=$record->getFieldValue("Contact_Apellido");
        $arrayData['ubicacion']=$record->getFieldValue("Estado");
        $arrayData['Next_Step']=$record->getFieldValue("Next_Step");
        $arrayData['marca']=$record->getFieldValue("Marca");
        $arrayData['Email_de_Dealer']=$record->getFieldValue("Email_de_Dealer");
        $arrayData['producto']=$record->getFieldValue("Producto");
        $arrayData['Representante']=$record->getFieldValue("Representante");
        $arrayData['dealer_name']=$record->getFieldValue("Nombre_de_vendedor_de_dealer");
        $arrayData['Representante_email']=$record->getFieldValue("Representante_email");

        if (method_exists($record->getFieldValue("Contact_Name"),'getEntityId')) {
            $arrayData['Contact_Name']=$record->getFieldValue("Contact_Name")->getEntityId();
        }else{
            $arrayData['Contact_Name']=null;
        }

        if (method_exists($record->getFieldValue("Dealer2"),'getEntityId')) {
            $arrayData['dealerId']=$record->getFieldValue("Dealer2")->getEntityId();
        }else{
            $arrayData['dealerId']=null;
        }

        if (method_exists($record->getFieldValue("Account_Name"),'getEntityId')) {
            $arrayData['Account_Name']=$record->getFieldValue("Account_Name")->getEntityId();
        }else{
            $arrayData['Account_Name']=null;
        }


        $data = (object) $arrayData;

        $marcas=$this->fields('4434756000000273884','Deals');//id Fiels Obtenidos de $this->campos()

        $ubicaciones=$this->fields('4434756000000271820','Deals');//id Fiels Obtenidos de $this->campos()

        $stages=$this->fields('4434756000000002565','Deals');//id Fiels Obtenidos de $this->campos()

        $dealers=$this->dealers();

        $accounts=$this->accounts();

        $contacts=$this->contacts();
        
        $repres=$this->representantes();

        $nameRepres=$this->nombreRepresentantes();


        return view('admin.deals.form', compact('contacts','accounts','marcas', 'ubicaciones' , 'stages' , 'repres','nameRepres','dealers','data'));


    }

    public function update(Request $request){
        

        $dealsId=base64_decode($request->input('dealsId'));

        $old_date = explode('-', $request->input('Closing_Date'));
        $new_data= $old_date[2].'-'.$old_date[1].'-'.$old_date[0];



        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); 
        
        $records = array();
        $record = ZCRMRecord::getInstance("Deals", $dealsId);
        $record->setFieldValue("Deal_Name", $request->input('Deal_Name'));
        $record->setFieldValue("Stage", $request->input('Stage'));
        $record->setFieldValue("Account_Name", $request->input('Account_Name'));
        $record->setFieldValue("Monto_estimado_del_orden_de_compra", str_replace ( ",", '', $request->input('monto_estimado')));
        $record->setFieldValue("Type", 'Consumidor');
        $record->setFieldValue("Contact_Name", $request->input('Contact_Name'));
        $record->setFieldValue("Closing_Date",$new_data);
        $record->setFieldValue("Contact_Apellido", $request->input('Contact_Apellido'));
        $record->setFieldValue("Estado", $request->input('ubicacion'));
        $record->setFieldValue("Next_Step", $request->input('Next_Step'));
        $record->setFieldValue("Dealer2", $request->input('dealerId'));
        $record->setFieldValue("Marca", $request->input('marca'));
        $record->setFieldValue("Email_de_Dealer", $request->input('Email_de_Dealer'));
        $record->setFieldValue("Producto", $request->input('producto'));
        $record->setFieldValue("Lead_Source", $request->input('Lead_Source'));
        $record->setFieldValue("Representante", $request->input('Representante'));
        $record->setFieldValue("Dealer", $request->input('dealerId'));
        $record->setFieldValue("Nombre_de_vendedor_de_dealer", $request->input('dealer_name'));
        $record->setFieldValue("Representante", $request->input('Representante'));
        $record->setFieldValue("Representante_email", $request->input('Representante_email'));


        //dd($record);
        
        array_push($records, $record); // pushing the record to the array
       // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $responseIn = $moduleIns->updateRecords($records,null,$lar_id,null); 

        $zohoRespuesta=$responseIn->getEntityResponses();

        //dd($zohoRespuesta);

        if($zohoRespuesta[0]->getStatus()!='success'){
           abort(404);
        }

          $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        

        \Session::flash('notification', $notification);

        return redirect()->route('admin.deals.index');


    }

    public function delete(Request $request){

        $zohoDelDeals= $this->deleteDeals($request->input('dealsId'));

        $resDelDeals=$zohoDelDeals->getEntityResponses();


        if($resDelDeals[0]->getStatus()=='success'){
            return 'true';
        }
        else{
            return 'false';
        }
    }



    public function rating(Request $request){

        //dd($request->input('dealsId'));
        $record= $this->validarDeals($request->input('dealsId'));


        $arrayData['dealsId']=$request->input('dealsId');
        $arrayData['contact_Name']=$record->getFieldValue("Contact_Name")->getLookupLabel();
        if (method_exists($record->getFieldValue("Contact_Name"),'getEntityId')) {
        $arrayData['email']=$this->getContact($record->getFieldValue("Contact_Name")->getEntityId());
        }else{
            $arrayData['dealerId']=null;
        }


        $data = (object) $arrayData;


        return view('admin.deals.rating', compact('data'));
        
    }

    public function storeRating(Request $request){


        $dealsInfo= $this->validarDeals($request->input('dealsId'));


        $dealsId=base64_decode($request->input('dealsId'));
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); 
        
        $records = array();
        $record = ZCRMRecord::getInstance("Deals", $dealsId);
        $record->setFieldValue("Solictar_Rating_de_Instalaci_n", true);

        //dd($record);
        
        array_push($records, $record); // pushing the record to the array
       // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $responseIn = $moduleIns->updateRecords($records,null,$lar_id,null); 

        $zohoRespuesta=$responseIn->getEntityResponses();


        if($zohoRespuesta[0]->getStatus()!='success'){
           abort(404);
        }

          $notification = array(
            'message'    => trans('global.rating_send'), 
            'alert_type' => 'success',);
        



        \Session::flash('notification', $notification);

        return redirect()->route('admin.deals.index');


    }


    public function cookDemo(Request $request){

        $record= $this->validarDeals($request->input('dealsId'));


        $arrayData['dealsId']=$request->input('dealsId');
        $arrayData['contact_Name']=$record->getFieldValue("Contact_Name")->getLookupLabel();
        if (method_exists($record->getFieldValue("Contact_Name"),'getEntityId')) {
        $arrayData['email']=$this->getContact($record->getFieldValue("Contact_Name")->getEntityId());
        }else{
            $arrayData['dealerId']=null;
        }


        $data = (object) $arrayData;


        return view('admin.deals.cookDemo', compact('data'));
        
    }

    public function storeCookDemo(Request $request){
        
        $dealsId=base64_decode($request->input('dealsId'));

        $old_date = explode('-', $request->input('Fecha_de_cooking_demo'));
        $new_data= $old_date[2].'-'.$old_date[1].'-'.$old_date[0];



        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); 
        
        $records = array();
        $record = ZCRMRecord::getInstance("Deals", $dealsId);
        $record->setFieldValue("Invitar_a_Cooking_demo", true);
        $record->setFieldValue("Fecha_de_cooking_demo", $new_data);

        //dd($record);
        
        array_push($records, $record); // pushing the record to the array
       // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $responseIn = $moduleIns->updateRecords($records,null,$lar_id,null); 

        $zohoRespuesta=$responseIn->getEntityResponses();

        if($zohoRespuesta[0]->getStatus()!='success'){
           abort(404);
        }

          $notification = array(
            'message'    => trans('global.cook_demo'), 
            'alert_type' => 'success',);
        
        

        \Session::flash('notification', $notification);

        return redirect()->route('admin.deals.index');


    }

    public function precotizar (Request $request){

        $record= $this->validarDeals($request->input('dealsId'));

        $arrayData['dealsId']=$request->input('dealsId');
        $arrayData['contact_Name']=$record->getFieldValue("Contact_Name")->getLookupLabel();
        $arrayData['Email_de_Dealer']=$record->getFieldValue("Email_de_Dealer");
        $arrayData['Enlace_a_cotizacion ']=$record->getFieldValue("Enlace_a_cotizacion");
        $arrayData['Enlace_a_informaci_n_addicion_l ']=$record->getFieldValue("Enlace_a_informaci_n_addicion_l");
        if (method_exists($record->getFieldValue("Contact_Name"),'getEntityId')) {
        $arrayData['email']=$this->getContact($record->getFieldValue("Contact_Name")->getEntityId());
        }else{
            $arrayData['dealerId']=null;
        }

        if (method_exists($record->getFieldValue("Dealer2"),'getEntityId')) {
            $arrayData['dealerId']=$record->getFieldValue("Dealer2")->getEntityId();
        }else{
            $arrayData['dealerId']=null;
        }
        $dealers=$this->dealers();

        $data = (object) $arrayData;


        return view('admin.deals.precotizar', compact('data','dealers'));
        
    }

    public function storePreco(Request $request){
        
        $dealsId=base64_decode($request->input('dealsId'));

        //dd($request->input());
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); 
        
        $records = array();

        $record = ZCRMRecord::getInstance("Deals", $dealsId);
        $record->setFieldValue("Enviar_a_Dealer", true);
        $record->setFieldValue("Contactar_Dealer_y_cliente_con_info_adiccon_l", true);
        $record->setFieldValue("Email_de_Dealer", $request->input('Email_de_Dealer'));
        $record->setFieldValue("Enlace_a_cotizacion", $request->input('Enlace_a_cotizacion'));
        $record->setFieldValue("Enlace_a_informaci_n_addicion_l", $request->input('Enlace_a_informaci_n_addicion_l'));

        //dd($record);
        
        array_push($records, $record); // pushing the record to the array
       // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $responseIn = $moduleIns->updateRecords($records,null,$lar_id,null); 

        $zohoRespuesta=$responseIn->getEntityResponses();



        if($zohoRespuesta[0]->getStatus()!='success'){
           abort(404);
        }

          $notification = array(
            'message'    => trans('global.precotizar'), 
            'alert_type' => 'success',);
        
        

        \Session::flash('notification', $notification);

        return redirect()->route('admin.deals.index');


    }

    private function fields($field_id,$modulo)
    {

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance($modulo); // To get module instance
        $response = $moduleIns->getFieldDetails($field_id); // to get the field
        $fieldsZoho = $response->getData(); // to get the field data in form of ZCRMField instance.
        $fields = array();

        foreach ($fieldsZoho->getPickListFieldValues() as $key => $marca) {
                $fields[$key]['displayValue']=$marca->getDisplayValue();
                $fields[$key]['actualValue']=$marca->getActualValue();
        }

        return $fields;
    }



    public function dealers()
    {
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Vendors"); // To 
        $param_map=array("page"=>0,"per_page"=>200); 
       //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
        $response = $moduleIns->getRecords($param_map); 
        $records = $response->getData(); 
        
        $dealers = array();

        foreach ($records as $key => $dealer) {
            $dealers[$key]['dealerId']=$dealer->getEntityId();
            $dealers[$key]['descripcion']=$dealer->getFieldValue("Vendor_Name");

        }

        return $dealers;


    }



    public function campos()
    {
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // To get module instance
        $response = $moduleIns->getAllFields(); // to get the field
        $fields = $response->getData(); // to get the array of ZCRMField instances

        dd($fields);

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // To get module instance
        $response = $moduleIns->getFieldDetails("4434756000000270255"); // to get the field
        $marcasZoho = $response->getData(); // to get the field data in form of ZCRMField instance.

       // dd($marcasZoho->getPickListFieldValues());

        $marcas = array();

        foreach ($marcasZoho->getPickListFieldValues() as $key => $marca) {
                $marcas[$key]['displayValue']=$marca->getDisplayValue();
                $marcas[$key]['actualValue']=$marca->getActualValue();
        }

        dd( $marcas);
    }


    
    private function validarDeals($dealsId){

        $dealsId=base64_decode($dealsId);
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // To get module instance
        $param_map = array("fields"=>"Deal_Name,Stage,Account_Name,Monto_estimado_del_orden_de_compra,Type,Contact_Name,Closing_Date,Contact_Apellido,Estado,Next_Step,Dealer2,Marca,Email_de_Dealer,Producto,Lead_Source,Representante,Dealer,Nombre_de_vendedor_de_dealer,Representante,Representante_email,Enlace_a_cotizacion,Enlace_a_informaci_n_addicion_l"); // key-value pair containing all the
        $response = $moduleIns->getRecord($dealsId,$param_map); // To get module record
        $record = $response->getData(); // To get response data
        if ($dealsId=== $record->getEntityId()) {
            return $record;
        }

        return false;

    }


    private function crearCuenta($dealsInfo){

        $moduleAcc = ZCRMRestClient::getInstance()->getModuleInstance("Accounts"); // to get the instance of the module
            
        $accounts = array();
        $accountInfo = ZCRMRecord::getInstance(null, null); // THIS LINE
        $accountInfo->setFieldValue("Estado", $dealsInfo->getFieldValue("Estado"));
        $accountInfo->setFieldValue("Phone", $dealsInfo->getFieldValue("Phone"));
        $accountInfo->setFieldValue("Account_Name", $dealsInfo->getFieldValue("First_Name").' '.$dealsInfo->getFieldValue("Last_Name"));



        array_push($accounts, $accountInfo); // pushing the record to the array
           // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $response = $moduleAcc->createRecords($accounts,null,$lar_id,null); 

        return $response;
    }

    private function upsertContacto($dealsInfo){

        $moduleContacto = ZCRMRestClient::getInstance()->getModuleInstance("Contacts"); // to get the instance of the module
            
        $contacts = array();
        $contactInfo = ZCRMRecord::getInstance(null, null); // THIS LINE
        $contactInfo->setFieldValue("Email", $dealsInfo->getFieldValue("Email"));
        $contactInfo->setFieldValue("Estado", $dealsInfo->getFieldValue("Estado"));
        $contactInfo->setFieldValue("Phone", $dealsInfo->getFieldValue("Phone"));
        $contactInfo->setFieldValue("First_Name", $dealsInfo->getFieldValue("First_Name"));
        $contactInfo->setFieldValue("Last_Name", $dealsInfo->getFieldValue("Last_Name"));
        $contactInfo->setFieldValue("Lead_Source", $dealsInfo->getFieldValue("Lead_Source"));


        array_push($contacts, $contactInfo); // pushing the record to the array
           // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $response = $moduleContacto->upsertRecords($contacts,null,$lar_id,null); 

        return $response;
    }

    private function crearDeals($dealsInfo,$accountId,$contactId,$input){

        $moduleDeals = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // to get the instance of the module

        $old_date = explode('/', $input['time']);
        $new_data = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];


        $deals = array();
        $dealsInfo = ZCRMRecord::getInstance(null, null); // THIS LINE
        $dealsInfo->setFieldValue("Contact_Name", $contactId);
        $dealsInfo->setFieldValue("Account_Name", $accountId);
        $dealsInfo->setFieldValue("Closing_Date", $new_data);
        $dealsInfo->setFieldValue("Stage", $input['stage']);

        $dealsInfo->setFieldValue("Phone", $dealsInfo->getFieldValue("Phone"));
        $dealsInfo->setFieldValue("Deal_Name", $dealsInfo->getFieldValue("First_Name").' '.$dealsInfo->getFieldValue("Last_Name"));
        $dealsInfo->setFieldValue("Producto", $dealsInfo->getFieldValue("Producto"));
        $dealsInfo->setFieldValue("Estado", $dealsInfo->getFieldValue("Estado"));
        $dealsInfo->setFieldValue("Lead_Source", $dealsInfo->getFieldValue("Lead_Source"));
        $dealsInfo->setFieldValue("Marca", $dealsInfo->getFieldValue("Marca"));
        if (method_exists($dealsInfo->getFieldValue("Dealer"),'getEntityId')) {
        $dealsInfo->setFieldValue("Dealer2", $dealsInfo->getFieldValue("Dealer")->getEntityId());
        }
        array_push($deals, $dealsInfo); // pushing the record to the array
           // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $response = $moduleDeals->createRecords($deals,null,$lar_id,null); 

        return $response;
    }

    public function representantes()
    {
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Sales_reps"); // To 
        $param_map=array("page"=>0,"per_page"=>200); 
       //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
        $response = $moduleIns->getRecords($param_map); 
        $records = $response->getData(); 
        
        $repres = array();

        foreach ($records as $key => $dealer) {
            $repres[$key]['repreId']=$dealer->getEntityId();
            $repres[$key]['email']=$dealer->getFieldValue("Email");

        }

        return $repres;
    }

    public function nombreRepresentantes()
    {
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Sales_reps"); // To 
        $param_map=array("page"=>0,"per_page"=>200); 
       //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
        $response = $moduleIns->getRecords($param_map); 
        $records = $response->getData(); 
        
        $repres = array();
        foreach ($records as $key => $dealer) {
            $repres[$key]['repreId']=$dealer->getEntityId();
            $repres[$key]['name']=$dealer->getFieldValue("Name");

        }


        return $repres;
    }


    private function deleteDeals($dealsId){

        $dealsId=base64_decode($dealsId);

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // to get the instance of the module
            $recordids = array(
                $dealsId
            ); // to create an array of record ids
        $responseIn = $moduleIns->deleteRecords($recordids); // to delete the records
        

        return $responseIn;
    }

    public function getContact($contactId){

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Contacts"); // To get module instance
        $param_map = array("fields"=>"Email"); // key-value pair containing all the params - optional
        $header_map = array("header_name"=>"header_value"); // key-value pair containing all the headers - optional
        $response = $moduleIns->getRecord($contactId,$param_map,$header_map); // To get module record
        $record = $response->getData(); // To get response data

        return $record->getFieldValue("Email");

    }


    public function accounts(){


        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Accounts"); // To 
        $param_map=array("page"=>0,"per_page"=>200); 
       //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
        $response = $moduleIns->getRecords($param_map); 
        $records = $response->getData(); 
        $accounts = array();

        foreach ($records as $key => $record) {
            $accounts[$key] = array (  
                                    'accountId' =>      $record->getEntityId(),
                                    'Account_Name' =>   $record->getFieldValue("Account_Name"),
                                );

        }


        return $accounts;

    }


    public function contacts(){


        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Contacts"); // To 
        $param_map=array("page"=>0,"per_page"=>200); 
       //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
        $response = $moduleIns->getRecords($param_map); 
        $records = $response->getData(); 
        $contacts = array();

        foreach ($records as $key => $record) {
            $contacts[$key] = array (  
                                    'contactId' =>   $record->getEntityId(),
                                    'Full_Name' =>   $record->getFieldValue("Full_Name"),
                                );

        }


        return $contacts;

    }

   


}
