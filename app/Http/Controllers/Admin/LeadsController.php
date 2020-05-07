<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use zcrmsdk\crm\exception\ZCRMException;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use zcrmsdk\crm\crud\ZCRMRecord;
use zcrmsdk\oauth\ZohoOAuth;
use App\Api\SalesManago;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use SimpleXMLElement;
use Redirect;
use Auth;





class LeadsController extends Controller
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
        return view('admin.leads.index');
    }


    public function table()
    {


        if ((Gate::check('admin_zoho'))) {
            $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To get module instance
            $criteria="Creado_Desde_Admin_Web:equals:true";//criteria to search for
            /* For VERSION <=2.0.6  $page=5;//page number
            $perPage=200;//records per page
            $response = $moduleIns->searchRecordsByCriteria($criteria, $page, $perPage); // To get module records//string $searchWord word to be searched//number $page to get the list of records from the respective pages. Default value for page is 1.//number $perPage To get the list of records available per page. Default value for per page is 200.*/
             $param_map=array("page"=>1,"per_page"=>200); // key-value pair containing all the parameters
            $response = $moduleIns->searchRecordsByCriteria($criteria,$param_map) ;// To get module records// $criteria to search for  to search for// $param_map-parameters key-value pair - optional
            $records = $response->getData(); // To get response data
            //dd($records);
        }else{
            $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To get module instance
            $criteria="Representante_email:equals:".Auth::user('email')->email;
            //criteria to search for
            /* For VERSION <=2.0.6  $page=5;//page number
            $perPage=200;//records per page
            $response = $moduleIns->searchRecordsByCriteria($criteria, $page, $perPage); // To get module records//string $searchWord word to be searched//number $page to get the list of records from the respective pages. Default value for page is 1.//number $perPage To get the list of records available per page. Default value for per page is 200.*/
             $param_map=array("page"=>1,"per_page"=>200); // key-value pair containing all the parameters
            $response = $moduleIns->searchRecordsByCriteria($criteria,$param_map) ;// To get module records// $criteria to search for  to search for// $param_map-parameters key-value pair - optional
            $records = $response->getData(); // To get response data
        }

        $leads = array();
        foreach ($records as $key => $record) {
            $leads[$key] = array (  
                                    'id' => base64_encode($records[$key]->getEntityId()),
                                    'nombre' => $records[$key]->getFieldValue('First_Name'),
                                    'apellido' => $records[$key]->getFieldValue('Last_Name'),
                                    'email' => $records[$key]->getFieldValue('Email'), 
                                    'status' => $records[$key]->getFieldValue('Lead_Status'), 
                                    'representante' => $records[$key]->getFieldValue('Representante'),
                                );

            $time=explode('T', $records[$key]->getCreatedTime());
            $fecha=explode('-', $time[0]);
            $leads[$key]['fecha']=$fecha[2].'-'.$fecha[1].'-'.$fecha[0];
        }
        $respuesta['data'] = $leads;
        echo json_encode($respuesta);
    }

    public function create(){

        $marcas=$this->fields('4434756000000270255','Leads');//id Fiels Obtenidos de $this->campos()

        $ubicaciones=$this->fields('4434756000000271630','Leads');//id Fiels Obtenidos de $this->campos()

        $estatus=$this->fields('4434756000000002611','Leads');//id Fiels Obtenidos de $this->campos()

        $LeadSources=$this->fields('4434756000000002609','Leads');//id Fiels Obtenidos de $this->campos()

        $dealers=$this->dealers();

        $repres=$this->representantes();

        $nameRepres=$this->nombreRepresentantes();

        //dd($repres);

        return view('admin.leads.form', compact('marcas', 'ubicaciones' , 'estatus' , 'LeadSources','dealers','repres','nameRepres'));
    }

    public function store(Request $request){

        

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // to get the instance of the module
        
        $records = array();
        $record = ZCRMRecord::getInstance(null, null); // THIS LINE
        $record->setFieldValue("First_Name", $request->input('first_name'));
        $record->setFieldValue("Last_Name", $request->input('last_name'));
        $record->setFieldValue("Phone", $request->input('phone'));
        $record->setFieldValue("Email", $request->input('email'));
        $record->setFieldValue("Marca", $request->input('marca'));
        $record->setFieldValue("Producto", $request->input('producto'));
        $record->setFieldValue("Estado", $request->input('ubicacion'));
        $record->setFieldValue("Lead_Status", $request->input('Estatus'));
        $record->setFieldValue("Nombre_de_Arquitecto", $request->input('Nombre_de_Arquitecto'));
        $record->setFieldValue("Phone_Arquitecto", $request->input('Phone_Arquitecto'));
        $record->setFieldValue("Email_Arquitecto", $request->input('Email_Arquitecto'));
        $record->setFieldValue("Lead_Source", $request->input('Lead_Source'));
        $record->setFieldValue("Representante", $request->input('Representante'));
        $record->setFieldValue("Representante_email", $request->input('Representante_email'));

        $record->setFieldValue("Creado_Desde_Admin_Web", true);

        $record->setFieldValue("Dealer", $request->input('dealerId'));
        $record->setFieldValue("Nombre_de_vendedor_de_dealer", $request->input('Nombre_de_vendedor_de_dealer'));
        $record->setFieldValue("Description", $request->input('Description'));

        
        array_push($records, $record); // pushing the record to the array
       // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $responseIn = $moduleIns->createRecords($records,null,$lar_id,null); 

        $zohoRespuesta=$responseIn->getEntityResponses();
        //dd($zohoRespuesta);


        if($zohoRespuesta[0]->getStatus()!='success'){
           abort(404);


        }

            /******* SALES MANAGO ************/
            $var=new SalesManago();
            $var->setSmEmail($request->input('email'));
            $var->setEstado($request->input('ubicacion'));
            $var->setSmNombre($request->input('first_name')." ".$request->input('last_name'));
            $var->setTag($this->asignarTagSM ($request->input('Estatus')));
            $var->setSmPhone($request->input('phone'));
            $var->setProducto($request->input('producto'));
            $var->setMensaje($request->input('Description'));
            $var->setBrand(implode(",", $request->input('marca')));
            //dd($var);
            $response=$var->upsert();


            $varArq=new SalesManago();
            $varArq->setSmNombre($request->input('Nombre_de_Arquitecto'));
            $varArq->setSmPhone($request->input('Phone_Arquitecto'));
            $varArq->setSmEmail($request->input('Email_Arquitecto'));
            $varArq->setTag('ARQUITECTO');
            $response=$varArq->upsert();
            /******* SALES MANAGO ************/

          $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        

        \Session::flash('notification', $notification);

        return redirect()->route('admin.leads.index');


    }

    public function edit(Request $request){

        $record= $this->validarLead($request->input('leadsId'));

        $arrayData['leadsId']=$request->input('leadsId');
        $arrayData['first_name']=$record->getFieldValue("First_Name");
        $arrayData['last_name']=$record->getFieldValue("Last_Name");
        $arrayData['phone']=$record->getFieldValue("Phone");
        $arrayData['email']=$record->getFieldValue("Email");
        $arrayData['marca']=$record->getFieldValue("Marca");
        $arrayData['producto']=$record->getFieldValue("Producto");
        $arrayData['ubicacion']=$record->getFieldValue("Estado");
        $arrayData['estatu']=$record->getFieldValue("Lead_Status");
        $arrayData['Nombre_de_Arquitecto']=$record->getFieldValue("Nombre_de_Arquitecto");
        $arrayData['Phone_Arquitecto']=$record->getFieldValue("Phone_Arquitecto");
        $arrayData['Email_Arquitecto']=$record->getFieldValue("Email_Arquitecto");
        $arrayData['Lead_Source']=$record->getFieldValue("Lead_Source");
        $arrayData['Representante']=$record->getFieldValue("Representante");
        $arrayData['Representante_email']=$record->getFieldValue("Representante_email");
        if (method_exists($record->getFieldValue("Dealer"),'getEntityId')) {
            $arrayData['dealerId']=$record->getFieldValue("Dealer")->getEntityId();
        }else{
            $arrayData['dealerId']=null;
        }
        $arrayData['Nombre_de_vendedor_de_dealer']=$record->getFieldValue("Nombre_de_vendedor_de_dealer");
        $arrayData['Description']=$record->getFieldValue("Description");


        $data = (object) $arrayData;

        $marcas=$this->fields('4434756000000270255','Leads');//id Fiels Obtenidos de $this->campos()

        $ubicaciones=$this->fields('4434756000000271630','Leads');//id Fiels Obtenidos de $this->campos()

        $estatus=$this->fields('4434756000000002611','Leads');//id Fiels Obtenidos de $this->campos()

        $LeadSources=$this->fields('4434756000000002609','Leads');//id Fiels Obtenidos de $this->campos()

        $dealers=$this->dealers();

        $repres=$this->representantes();

        $nameRepres=$this->nombreRepresentantes();


        
       //dd($data);


    
        return view('admin.leads.form', compact('data','marcas', 'ubicaciones' , 'estatus' , 'LeadSources','dealers','repres','nameRepres'));

    }

    public function update(Request $request){
        

        //dd($request->input());

        $leadsId=base64_decode($request->input('leadsId'));
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); 
        
        $records = array();
        $record = ZCRMRecord::getInstance("Leads", $leadsId);
        $record->setFieldValue("First_Name", $request->input('first_name'));
        $record->setFieldValue("Last_Name", $request->input('last_name'));
        $record->setFieldValue("Phone", $request->input('phone'));
        $record->setFieldValue("Email", $request->input('email'));
        $record->setFieldValue("Marca", $request->input('marca'));
        $record->setFieldValue("Producto", $request->input('producto'));
        $record->setFieldValue("Estado", $request->input('ubicacion'));
        $record->setFieldValue("Lead_Status", $request->input('Estatus'));
        $record->setFieldValue("Nombre_de_Arquitecto", $request->input('Nombre_de_Arquitecto'));
        $record->setFieldValue("Phone_Arquitecto", $request->input('Phone_Arquitecto'));
        $record->setFieldValue("Email_Arquitecto", $request->input('Email_Arquitecto'));
        $record->setFieldValue("Lead_Source", $request->input('Lead_Source'));
        $record->setFieldValue("Representante", $request->input('Representante'));
        $record->setFieldValue("Representante_email", $request->input('Representante_email'));
        $record->setFieldValue("Dealer", $request->input('dealerId'));
        $record->setFieldValue("Nombre_de_vendedor_de_dealer", $request->input('Nombre_de_vendedor_de_dealer'));
        $record->setFieldValue("Description", $request->input('Description'));


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

            /******* SALES MANAGO ************/
            $var=new SalesManago();
            $var->setSmEmail($request->input('email'));
            $var->setEstado($request->input('ubicacion'));
            $var->setSmNombre($request->input('first_name')." ".$request->input('last_name'));
            $var->setTag($this->asignarTagSM ($request->input('Estatus')));
            $var->setSmPhone($request->input('phone'));
            $var->setProducto($request->input('producto'));
            $var->setMensaje($request->input('Description'));
            $var->setBrand(implode(",", $request->input('marca')));
            $response=$var->upsert();



            $varArq=new SalesManago();
            $varArq->setSmNombre($request->input('Nombre_de_Arquitecto'));
            $varArq->setSmPhone($request->input('Phone_Arquitecto'));
            $varArq->setSmEmail($request->input('Email_Arquitecto'));
            //$varArq->setTag('ARQUITECTO');
            
            $response=$varArq->upsert();
            /******* SALES MANAGO ************/

          $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        

        \Session::flash('notification', $notification);

        return redirect()->route('admin.leads.index');


    }

    public function delete(Request $request){

        $zohoDelLeads= $this->deleteLeads($request->input('leadsId'));

        $resDelLeads=$zohoDelLeads->getEntityResponses();


        if($resDelLeads[0]->getStatus()=='success'){
            return 'true';
        }
        else{
            return 'false';
        }
    }



    public function prospecto(Request $request){

        $record= $this->validarLead($request->input('leadsId'));


        $arrayData['leadsId']=$request->input('leadsId');
        $arrayData['first_name']=$record->getFieldValue("First_Name");
        $arrayData['last_name']=$record->getFieldValue("Last_Name");
        $arrayData['propecto_name']=$record->getFieldValue("First_Name").' '.$record->getFieldValue("Last_Name");
        $arrayData['last_name']=$record->getFieldValue("Last_Name");
        $arrayData['phone']=$record->getFieldValue("Phone");
        $arrayData['email']=$record->getFieldValue("Email");
        $arrayData['ubicacion']=$record->getFieldValue("Estado");
        $arrayData['marca']=$record->getFieldValue("Marca");
        $arrayData['producto']=$record->getFieldValue("Producto");
        $arrayData['estatu']=$record->getFieldValue("Lead_Status");
        $arrayData['Nombre_de_Arquitecto']=$record->getFieldValue("Nombre_de_Arquitecto");
        $arrayData['Phone_Arquitecto']=$record->getFieldValue("Phone_Arquitecto");
        $arrayData['Email_Arquitecto']=$record->getFieldValue("Email_Arquitecto");
        $arrayData['Lead_Source']=$record->getFieldValue("Lead_Source");
        $arrayData['Representante']=$record->getFieldValue("Representante");
        $arrayData['Representante_email']=$record->getFieldValue("Representante_email");
        if (method_exists($record->getFieldValue("Dealer"),'getEntityId')) {
            $arrayData['dealerId']=$record->getFieldValue("Dealer")->getEntityId();
        }else{
            $arrayData['dealerId']=null;
        }
        $arrayData['Nombre_de_vendedor_de_dealer']=$record->getFieldValue("Nombre_de_vendedor_de_dealer");
        $arrayData['Description']=$record->getFieldValue("Description");


        $data = (object) $arrayData;

        $stages=$this->fields('4434756000000002565','Deals');//id Fiels Obtenidos de $this->campos()

        return view('admin.leads.prospecto', compact('stages','data'));
        
    }

    public function storeProspecto(Request $request){


        $leadInfo= $this->validarLead($request->input('leadsId'));

        //dd($leadInfo);
        $responseAcc=$this->crearCuenta($leadInfo);
        $zohoResAcc=$responseAcc->getEntityResponses();
        if($zohoResAcc[0]->getStatus()!='success'){
               abort(404);
        }
        $responseAcc = $responseAcc->getData();
        $accountId = $responseAcc[0]->getEntityId();
        
        //dump($accountId);

        $responseContact=$this->upsertContacto($leadInfo);
        $zohoResContact=$responseContact->getEntityResponses();
        if($zohoResContact[0]->getStatus()!='success'){
               abort(404);
        }
        $responseContact = $responseContact->getData();
        $contactId = $responseContact[0]->getEntityId();

        //dump($contactId);


        $responseDeals=$this->crearDeals($leadInfo,$accountId,$contactId,$request->input());
        $zohoResDeals=$responseDeals->getEntityResponses();
        if($zohoResDeals[0]->getStatus()!='success'){
               abort(404);
        }
        $responseDeals = $responseDeals->getData();
        $dealsId = $responseDeals[0]->getEntityId();

        //dump($dealsId);

        if ( !empty($accountId) && !empty($contactId) && !empty($dealsId)  ) {

            $zohoDelLeads= $this->deleteLeads($request->input('leadsId'));
            
        }else{
            abort(404);
        }

        $resDelLeads=$zohoDelLeads->getEntityResponses();
        if($resDelLeads[0]->getStatus()!='success'){
               abort(404);
        }

            $notification = array(
                'message'    => trans('global.leadsConvert'), 
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



    public function campos()
    {


        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To get module instance
        $response = $moduleIns->getFieldDetails("4434756000000270255"); // to get the field
        $marcasZoho = $response->getData(); // to get the field data in form of ZCRMField instance.

        dd($marcasZoho->getPickListFieldValues());

        $marcas = array();

        foreach ($marcasZoho->getPickListFieldValues() as $key => $marca) {
                $marcas[$key]['displayValue']=$marca->getDisplayValue();
                $marcas[$key]['actualValue']=$marca->getActualValue();
        }

        dd( $marcas);
    }


    
    private function validarLead($leadsId){

        $leadsId=base64_decode($leadsId);
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To get module instance
         $param_map = array("fields"=>"First_Name,Last_Name,Phone,Email,Marca,Producto,Estado,Lead_Status,Nombre_de_Arquitecto,Phone_Arquitecto,Email_Arquitecto,Lead_Source,Representante,Representante_email,Dealer,Nombre_de_vendedor_de_dealer,Description"); // key-value pair containing all the
        $response = $moduleIns->getRecord($leadsId,$param_map); // To get module record
        $record = $response->getData(); // To get response data

        if ($leadsId=== $record->getEntityId()) {
            return $record;
        }
        return false;

    }


    private function crearCuenta($leadInfo){

        $moduleAcc = ZCRMRestClient::getInstance()->getModuleInstance("Accounts"); // to get the instance of the module
            
        $accounts = array();
        $accountInfo = ZCRMRecord::getInstance(null, null); // THIS LINE
        $accountInfo->setFieldValue("Estado", $leadInfo->getFieldValue("Estado"));
        $accountInfo->setFieldValue("Phone", $leadInfo->getFieldValue("Phone"));
        $accountInfo->setFieldValue("Account_Name", $leadInfo->getFieldValue("First_Name").' '.$leadInfo->getFieldValue("Last_Name"));



        array_push($accounts, $accountInfo); // pushing the record to the array
           // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $response = $moduleAcc->createRecords($accounts,null,$lar_id,null); 

        return $response;
    }

    private function upsertContacto($leadInfo){

        $moduleContacto = ZCRMRestClient::getInstance()->getModuleInstance("Contacts"); // to get the instance of the module
            
        $contacts = array();
        $contactInfo = ZCRMRecord::getInstance(null, null); // THIS LINE
        $contactInfo->setFieldValue("Email", $leadInfo->getFieldValue("Email"));
        $contactInfo->setFieldValue("Estado", $leadInfo->getFieldValue("Estado"));
        $contactInfo->setFieldValue("Phone", $leadInfo->getFieldValue("Phone"));
        $contactInfo->setFieldValue("First_Name", $leadInfo->getFieldValue("First_Name"));
        $contactInfo->setFieldValue("Last_Name", $leadInfo->getFieldValue("Last_Name"));
        $contactInfo->setFieldValue("Lead_Source", $leadInfo->getFieldValue("Lead_Source"));


        array_push($contacts, $contactInfo); // pushing the record to the array
           // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $response = $moduleContacto->upsertRecords($contacts,null,$lar_id,null); 

        return $response;
    }

    private function crearDeals($leadInfo,$accountId,$contactId,$input){

        $moduleDeals = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // to get the instance of the module

        $old_date = explode('/', $input['time']);
        $new_data = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];


        $deals = array();
        $dealsInfo = ZCRMRecord::getInstance(null, null); // THIS LINE
        $dealsInfo->setFieldValue("Contact_Name", $contactId);
        $dealsInfo->setFieldValue("Account_Name", $accountId);
        $dealsInfo->setFieldValue("Closing_Date", $new_data);
        $dealsInfo->setFieldValue("Stage", $input['stage']);

        $dealsInfo->setFieldValue("Phone", $leadInfo->getFieldValue("Phone"));
        $dealsInfo->setFieldValue("Deal_Name", $leadInfo->getFieldValue("First_Name").' '.$leadInfo->getFieldValue("Last_Name"));
        $dealsInfo->setFieldValue("Producto", $leadInfo->getFieldValue("Producto"));
        $dealsInfo->setFieldValue("Estado", $leadInfo->getFieldValue("Estado"));
        $dealsInfo->setFieldValue("Lead_Source", $leadInfo->getFieldValue("Lead_Source"));
        $dealsInfo->setFieldValue("Marca", $leadInfo->getFieldValue("Marca"));
        $dealsInfo->setFieldValue("Representante", trim($leadInfo->getFieldValue("Representante")) );
        $dealsInfo->setFieldValue("Representante_email", trim($leadInfo->getFieldValue("Representante_email")) );
        if (method_exists($leadInfo->getFieldValue("Dealer"),'getEntityId')) {
        $dealsInfo->setFieldValue("Dealer2", $leadInfo->getFieldValue("Dealer")->getEntityId());
        }
        array_push($deals, $dealsInfo); // pushing the record to the array
           // $duplicate_check_fields=array('Company');
        $lar_id=null; // THIS LINE
        $trigger=array();//trigger to include
        $response = $moduleDeals->createRecords($deals,null,$lar_id,null); 

        return $response;
    }


    private function deleteLeads($leadsId){

        $leadsId=base64_decode($leadsId);

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // to get the instance of the module
            $recordids = array(
                $leadsId
            ); // to create an array of record ids
        $responseIn = $moduleIns->deleteRecords($recordids); // to delete the records
        

        return $responseIn;
    }




    public function filterRepre(Request $request){



        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Representantes"); // To 
        $param_map=array("page"=>0,"per_page"=>200); 
       //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
        $response = $moduleIns->getRecords($param_map); 
        $records = $response->getData(); 
        $deals = array();
        
        //dd($records);



    }

    private function asignarTagSM($status){

        switch ($status) {
            case 'VISITA A SHOWROOM AGENDADA':
                $tagSM='SHOWROOM';
                break;

            case 'COTIZACIÓN SOLICITADA':
                $tagSM='COTIZACION';
                break;
            
            case 'COOKING DEMO AGENDADO':
                $tagSM='COOKING_DEMO';
                break;

            case 'LLAMADA AGENDADA':
                $tagSM='LLAMADA';
                break;
            
            default:
                $tagSM='LEAD_MANUAL';
                break;
        }
        return $tagSM;
    }
   
}
