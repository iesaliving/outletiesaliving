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
            
            $records=$this->armarTablaAdmin();

        }else{

            $records=$this->armarTablaUser();

        }

        $respuesta['data'] = $records;
       // dd($respuesta['data']);

        echo json_encode($respuesta);


    }

    public function create(){

        $marcas=$this->fields('4434756000000270255','Leads');//id Fiels Obtenidos de $this->campos()

        $ubicaciones=$this->fields('4434756000000271630','Leads');//id Fiels Obtenidos de $this->campos()

        $estatus=$this->fields('4434756000000002611','Leads');//id Fiels Obtenidos de $this->campos()

        $LeadSources=$this->fields('4434756000000002609','Leads');//id Fiels Obtenidos de $this->campos()

        $industries=$this->fields('4434756000000002613','Leads');//id Fiels Obtenidos de $this->campos()

        $typesLeads=$this->fields('4434756000000270274','Leads');//id Fiels Obtenidos de $this->campos()
        
        $showroomCiudades=$this->fields('4434756000000298038','Leads');//id Fiels Obtenidos de $this->campos()

        $dealers=$this->dealers();

        $repres=$this->representantes();


        return view('admin.leads.create', compact('marcas', 'ubicaciones' , 'estatus' , 'LeadSources','dealers','repres', 'industries', 'typesLeads', 'showroomCiudades'));
    }

    public function store(Request $request){

        
       // dump($request->input());
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // to get the instance of the module
        $records = array();
        $record = ZCRMRecord::getInstance(null, null); // THIS LINE
        $record->setFieldValue("First_Name", $request->input('First_Name'));
        $record->setFieldValue("Last_Name", $request->input('Last_Name'));
        $record->setFieldValue("Company", $request->input('Company'));
        $record->setFieldValue("Designation", $request->input('Designation'));
        $record->setFieldValue("Industry", $request->input('Industry'));
        $record->setFieldValue("Lead_Status", $request->input('Lead_Status'));
        $record->setFieldValue("Typo_de_Lead", $request->input('Typo_de_Lead'));
        $record->setFieldValue("Marca", $request->input('Marca'));
        $record->setFieldValue("Dealer", $request->input('Dealer'));
        $record->setFieldValue("Producto", $request->input('Producto'));
        $record->setFieldValue("Nombre_de_vendedor_de_dealer", $request->input('Nombre_de_vendedor_de_dealer'));
        $record->setFieldValue("Rep", $request->input('Rep'));
        $record->setFieldValue("Representante_email", $request->input('Representante_email'));
        $record->setFieldValue("Phone", $request->input('Phone'));
        $record->setFieldValue("Website", $request->input('Website'));
        $record->setFieldValue("Mobile", $request->input('Mobile'));
        $record->setFieldValue("Skype_ID", $request->input('Skype_ID'));
        $record->setFieldValue("Email", $request->input('Email'));
        $record->setFieldValue("Secondary_Email", $request->input('Secondary_Email'));
        $record->setFieldValue("Nombre_de_Arquitecto", $request->input('Nombre_de_Arquitecto'));
        $record->setFieldValue("Email_Arquitecto", $request->input('Email_Arquitecto'));
        $record->setFieldValue("Apellido_de_Arquitecto", $request->input('Apellido_de_Arquitecto'));
        $record->setFieldValue("Phone_Arquitecto", $request->input('Phone_Arquitecto'));
        $record->setFieldValue("Country", $request->input('Country'));
        $record->setFieldValue("Street", $request->input('Street'));
        $record->setFieldValue("City", $request->input('City'));
        $record->setFieldValue("Zip_Code", $request->input('Zip_Code'));
        $record->setFieldValue("Estado", $request->input('Estado'));
        $record->setFieldValue("Showroom_Ciudad", $request->input('Showroom_Ciudad'));
        $record->setFieldValue("Fecha_de_cooking_demo",$this->FechaZoho($request->input('Fecha_de_cooking_demo')));
        $record->setFieldValue("Fecha_de_visita_al_Showroom", $this->FechaZoho($request->input('Fecha_de_visita_al_Showroom')));
        $record->setFieldValue("Description", $request->input('Description'));
        $record->setFieldValue("Hora_de_visita_al_showroom", $request->input('Hora_de_visita_al_showroom'));
        $record->setFieldValue("Hora_de_la_llamada", $request->input('Hora_de_la_llamada'));
        $record->setFieldValue("Fecha_de_la_llamada", $this->FechaZoho($request->input('Fecha_de_la_llamada')));
        $record->setFieldValue("UTM_Source", $request->input('UTM_Source'));
        $record->setFieldValue("Lead_Source", $request->input('Lead_Source'));
        $record->setFieldValue("UTM_Anuncio_ID", $request->input('UTM_Anuncio_ID'));
        $record->setFieldValue("UTM_Campaign_Name", $request->input('UTM_Campaign_Name'));
        $record->setFieldValue("Creado_Desde_Admin_Web", true);


        
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
            $var->setSmEmail($request->input('Email'));
            $var->setEstado($request->input('Estado'));
            $var->setSmNombre($request->input('First_Name')." ".$request->input('Last_Name'));
            $var->setTag($this->asignarTagSM ($request->input('Lead_Status')));
            $var->setSmPhone($request->input('Phone'));
            $var->setProducto($request->input('Producto'));
            $var->setMensaje($request->input('Description'));
            $var->setBrand((!empty($request->input('Marca'))) ? implode(",", $request->input('Marca')) : '');
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

      //  (dump($record));

        $arrayData['leadsId']=$request->input('leadsId');
        $arrayData['First_Name']=$record->getFieldValue("First_Name");
        $arrayData['Last_Name']=$record->getFieldValue("Last_Name");
        $arrayData['Company']=$record->getFieldValue("Company");
        $arrayData['Designation']=$record->getFieldValue("Designation");
        $arrayData['Industry']=$record->getFieldValue("Industry");
        $arrayData['Lead_Status']=$record->getFieldValue("Lead_Status");
        $arrayData['Typo_de_Lead']=$record->getFieldValue("Typo_de_Lead");
        $arrayData['Marca']=$record->getFieldValue("Marca");
        $arrayData['Dealer']=$record->getFieldValue("Dealer");
        $arrayData['Producto']=$record->getFieldValue("Producto");
        $arrayData['Nombre_de_vendedor_de_dealer']=$record->getFieldValue("Nombre_de_vendedor_de_dealer");
        

        if (method_exists($record->getFieldValue("Rep"),'getEntityId')) {
            $arrayData['Rep']=$record->getFieldValue("Rep")->getEntityId();
        }else{
            $arrayData['Rep']=null;
        }

        $arrayData['Representante_email']=$record->getFieldValue("Representante_email");
        $arrayData['Phone']=$record->getFieldValue("Phone");
        $arrayData['Website']=$record->getFieldValue("Website");
        $arrayData['Mobile']=$record->getFieldValue("Mobile");
        $arrayData['Skype_ID']=$record->getFieldValue("Skype_ID");
        $arrayData['Email']=$record->getFieldValue("Email");
        $arrayData['Secondary_Email']=$record->getFieldValue("Secondary_Email");
        $arrayData['Nombre_de_Arquitecto']=$record->getFieldValue("Nombre_de_Arquitecto");
        $arrayData['Email_Arquitecto']=$record->getFieldValue("Email_Arquitecto");
        $arrayData['Apellido_de_Arquitecto']=$record->getFieldValue("Apellido_de_Arquitecto");
        $arrayData['Phone_Arquitecto']=$record->getFieldValue("Phone_Arquitecto");
        $arrayData['Country']=$record->getFieldValue("Country");
        $arrayData['Street']=$record->getFieldValue("Street");
        $arrayData['City']=$record->getFieldValue("City");
        $arrayData['Zip_Code']=$record->getFieldValue("Zip_Code");
        $arrayData['Estado']=$record->getFieldValue("Estado");
        $arrayData['Showroom_Ciudad']=$record->getFieldValue("Showroom_Ciudad");

        $arrayData['Fecha_de_cooking_demo']= $this->FechaCrmAdmin ($record->getFieldValue("Fecha_de_cooking_demo"));
        $arrayData['Fecha_de_visita_al_Showroom']= $this->FechaCrmAdmin ($record->getFieldValue("Fecha_de_visita_al_Showroom"));
        $arrayData['Description']=$record->getFieldValue("Description");
        $arrayData['Hora_de_visita_al_showroom']=$record->getFieldValue("Hora_de_visita_al_showroom");
        $arrayData['Hora_de_la_llamada']=$record->getFieldValue("Hora_de_la_llamada");
        $arrayData['Fecha_de_la_llamada']=$this->FechaCrmAdmin ($record->getFieldValue("Fecha_de_la_llamada"));
        $arrayData['UTM_Source']=$record->getFieldValue("UTM_Source");
        $arrayData['Lead_Source']=$record->getFieldValue("Lead_Source");
        $arrayData['UTM_Anuncio_ID']=$record->getFieldValue("UTM_Anuncio_ID");
        $arrayData['UTM_Campaign_Name']=$record->getFieldValue("UTM_Campaign_Name");


        if (method_exists($record->getFieldValue("Dealer"),'getEntityId')) {
            $arrayData['Dealer']=$record->getFieldValue("Dealer")->getEntityId();
        }else{
            $arrayData['Dealer']=null;
        }

       
        $data = (object) $arrayData;

        $marcas=$this->fields('4434756000000270255','Leads');//id Fiels Obtenidos de $this->campos()

        $ubicaciones=$this->fields('4434756000000271630','Leads');//id Fiels Obtenidos de $this->campos()

        $estatus=$this->fields('4434756000000002611','Leads');//id Fiels Obtenidos de $this->campos()

        $LeadSources=$this->fields('4434756000000002609','Leads');//id Fiels Obtenidos de $this->campos()

        $industries=$this->fields('4434756000000002613','Leads');//id Fiels Obtenidos de $this->campos()

        $typesLeads=$this->fields('4434756000000270274','Leads');//id Fiels Obtenidos de $this->campos()
        
        $showroomCiudades=$this->fields('4434756000000298038','Leads');//id Fiels Obtenidos de $this->campos()

        $dealers=$this->dealers();

        $repres=$this->representantes();

       // dump($data);

        //dd($repres);

        return view('admin.leads.update', compact('data','marcas', 'ubicaciones' , 'estatus' , 'LeadSources','dealers','repres', 'industries', 'typesLeads', 'showroomCiudades'));

    }

    public function update(Request $request){
        

        //dd($request->input());

        $leadsId=base64_decode($request->input('leadsId'));
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); 
        
        $records = array();
        $record = ZCRMRecord::getInstance("Leads", $leadsId);
        $record->setFieldValue("First_Name", $request->input('First_Name'));
        $record->setFieldValue("Last_Name", $request->input('Last_Name'));
        $record->setFieldValue("Company", $request->input('Company'));
        $record->setFieldValue("Designation", $request->input('Designation'));
        $record->setFieldValue("Industry", $request->input('Industry'));
        $record->setFieldValue("Lead_Status", $request->input('Lead_Status'));
        $record->setFieldValue("Typo_de_Lead", $request->input('Typo_de_Lead'));
        $record->setFieldValue("Marca", $request->input('Marca'));
        $record->setFieldValue("Dealer", $request->input('Dealer'));
        $record->setFieldValue("Producto", $request->input('Producto'));
        $record->setFieldValue("Nombre_de_vendedor_de_dealer", $request->input('Nombre_de_vendedor_de_dealer'));
        $record->setFieldValue("Rep", $request->input('Rep'));
        $record->setFieldValue("Representante_email", $request->input('Representante_email'));
        $record->setFieldValue("Phone", $request->input('Phone'));
        $record->setFieldValue("Website", $request->input('Website'));
        $record->setFieldValue("Mobile", $request->input('Mobile'));
        $record->setFieldValue("Skype_ID", $request->input('Skype_ID'));
        $record->setFieldValue("Email", $request->input('Email'));
        $record->setFieldValue("Secondary_Email", $request->input('Secondary_Email'));
        $record->setFieldValue("Nombre_de_Arquitecto", $request->input('Nombre_de_Arquitecto'));
        $record->setFieldValue("Email_Arquitecto", $request->input('Email_Arquitecto'));
        $record->setFieldValue("Apellido_de_Arquitecto", $request->input('Apellido_de_Arquitecto'));
        $record->setFieldValue("Phone_Arquitecto", $request->input('Phone_Arquitecto'));
        $record->setFieldValue("Country", $request->input('Country'));
        $record->setFieldValue("Street", $request->input('Street'));
        $record->setFieldValue("City", $request->input('City'));
        $record->setFieldValue("Zip_Code", $request->input('Zip_Code'));
        $record->setFieldValue("Estado", $request->input('Estado'));
        $record->setFieldValue("Showroom_Ciudad", $request->input('Showroom_Ciudad'));
        $record->setFieldValue("Fecha_de_cooking_demo",$this->FechaZoho($request->input('Fecha_de_cooking_demo')));
        $record->setFieldValue("Fecha_de_visita_al_Showroom", $this->FechaZoho($request->input('Fecha_de_visita_al_Showroom')));
        $record->setFieldValue("Description", $request->input('Description'));
        $record->setFieldValue("Hora_de_visita_al_showroom", $request->input('Hora_de_visita_al_showroom'));
        $record->setFieldValue("Hora_de_la_llamada", $request->input('Hora_de_la_llamada'));
        $record->setFieldValue("Fecha_de_la_llamada", $this->FechaZoho($request->input('Fecha_de_la_llamada')));
        $record->setFieldValue("UTM_Source", $request->input('UTM_Source'));
        $record->setFieldValue("Lead_Source", $request->input('Lead_Source'));
        $record->setFieldValue("UTM_Anuncio_ID", $request->input('UTM_Anuncio_ID'));
        $record->setFieldValue("UTM_Campaign_Name", $request->input('UTM_Campaign_Name'));
        $record->setFieldValue("Creado_Desde_Admin_Web", true);


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
            $var->setSmEmail($request->input('Email'));
            $var->setEstado($request->input('Estado'));
            $var->setSmNombre($request->input('First_Name')." ".$request->input('Last_Name'));
            $var->setTag($this->asignarTagSM ($request->input('Lead_Status')));
            $var->setSmPhone($request->input('Phone'));
            $var->setProducto($request->input('Producto'));
            $var->setMensaje($request->input('Description'));
            $var->setBrand((!empty($request->input('Marca'))) ? implode(",", $request->input('Marca')) : '');
            //dd($var);
            $response=$var->upsert();


            $varArq=new SalesManago();
            $varArq->setSmNombre($request->input('Nombre_de_Arquitecto'));
            $varArq->setSmPhone($request->input('Phone_Arquitecto'));
            $varArq->setSmEmail($request->input('Email_Arquitecto'));
            $varArq->setTag('ARQUITECTO');
            $response=$varArq->upsert();
            /******* SALES MANAGO ************/
            
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
        
        if (method_exists($record->getFieldValue("Rep"),'getEntityId')) {
            $arrayData['Rep']=$record->getFieldValue("Rep")->getEntityId();
        }else{
            $arrayData['Rep']=null;
        }
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
            $repres[$key]['name']=$dealer->getFieldValue("Name");

        }

     //  dd($repres);
        return $repres;
    }

    public function campos()
    {

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To get module instance
        $response = $moduleIns->getAllFields(); // to get the field
        $fields = $response->getData(); // to get the array of ZCRMField instances

        dd($fields);

    }


    
    private function validarLead($leadsId){

        $leadsId=base64_decode($leadsId);
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To get module instance
        $response = $moduleIns->getRecord($leadsId); // To get module record
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

        $deals = array();
        $dealsInfo = ZCRMRecord::getInstance(null, null); // THIS LINE
        $dealsInfo->setFieldValue("Contact_Name", $contactId);
        $dealsInfo->setFieldValue("Account_Name", $accountId);
        $dealsInfo->setFieldValue("Closing_Date", $this->FechaZoho($input['Closing_Date']));
        $dealsInfo->setFieldValue("Stage", $input['stage']);
        $dealsInfo->setFieldValue("Contact_Apellido", $leadInfo->getFieldValue("Last_Name"));

        $dealsInfo->setFieldValue("Phone", $leadInfo->getFieldValue("Phone"));
        $dealsInfo->setFieldValue("Deal_Name", $leadInfo->getFieldValue("First_Name").' '.$leadInfo->getFieldValue("Last_Name"));
        $dealsInfo->setFieldValue("Producto", $leadInfo->getFieldValue("Producto"));
        $dealsInfo->setFieldValue("Estado", $leadInfo->getFieldValue("Estado"));
        $dealsInfo->setFieldValue("Lead_Source", $leadInfo->getFieldValue("Lead_Source"));
        $dealsInfo->setFieldValue("Nombre_de_vendedor_de_dealer", $leadInfo->getFieldValue("Nombre_de_vendedor_de_dealer"));
        
        $dealsInfo->setFieldValue("Marca", $leadInfo->getFieldValue("Marca"));
        $dealsInfo->setFieldValue("Reps", $leadInfo->getFieldValue("Rep")->getEntityId()) ;
        $dealsInfo->setFieldValue("Representante_email", trim($leadInfo->getFieldValue("Representante_email")) );

        $dealsInfo->setFieldValue("UTM_Anuncio_ID", $leadInfo->getFieldValue("UTM_Anuncio_ID"));
        $dealsInfo->setFieldValue("Lead_Source", $leadInfo->getFieldValue("Lead_Source"));
        $dealsInfo->setFieldValue("UTM_Source", $leadInfo->getFieldValue("UTM_Source"));
        $dealsInfo->setFieldValue("UTM_Campaign_Name", $leadInfo->getFieldValue("UTM_Campaign_Name"));


        $dealsInfo->setFieldValue("Description", $leadInfo->getFieldValue("Description"));
        $dealsInfo->setFieldValue("Showroom", $leadInfo->getFieldValue("Showroom_Ciudad"));

        $dealsInfo->setFieldValue("Fecha_de_visita_al_Showroom", $leadInfo->getFieldValue("Fecha_de_visita_al_Showroom"));
        $dealsInfo->setFieldValue("Fecha_de_la_llamada", $leadInfo->getFieldValue("Fecha_de_la_llamada"));
        $dealsInfo->setFieldValue("Fecha_de_cooking_demo", $leadInfo->getFieldValue("Fecha_de_cooking_demo"));
        
        $dealsInfo->setFieldValue("Hora_de_visita_al_showroom", $leadInfo->getFieldValue("Hora_de_visita_al_showroom"));
        $dealsInfo->setFieldValue("Hora_de_la_llamada", $leadInfo->getFieldValue("Hora_de_la_llamada"));


 

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


    private function FechaZoho($fecha){
        $new_data='';
        if (!empty($fecha)) {

            $old_date = explode('-', $fecha);
            $new_data = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];
        }
       return $new_data;

    }

     private function FechaCrmAdmin($fecha){
        $new_data='';
        if (!empty($fecha)) {

            $old_date = explode('-', $fecha);
            $new_data = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];
        }

       return $new_data;

    }



    private function armarTablaAdmin(){
        $data = array();
        $page=1;
        $code=200;
        while ($code==200) {
            
            try{   
                # code...
                $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To 
                $param_map=array("page"=>$page,"per_page"=>200); 
                //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
                $response = $moduleIns->getRecords($param_map); 
                $records[$page-1] = $response->getData(); 
                $leads[$page-1] = array();
                foreach ($records[$page-1] as $key => $record) {
                    $leads[$page-1][$key] = array (  
                                            'id' => base64_encode($records[$page-1][$key]->getEntityId()),
                                            'Full_Name' => $records[$page-1][$key]->getFieldValue('Full_Name'),
                                            //'apellido' => $records[$page-1][$key]->getFieldValue('Last_Name'),
                                            'email' => $records[$page-1][$key]->getFieldValue('Email'), 
                                            'status' => $records[$page-1][$key]->getFieldValue('Lead_Status'), 
                                            //'Rep' =>
                                        );


                    $leads[$page-1][$key]['Rep']= method_exists( $records[$page-1][$key]->getFieldValue('Rep'), 'getLookupLabel') ? $records[$page-1][$key]->getFieldValue('Rep')->getLookupLabel() : null ;

                    $time=explode('T', $records[$page-1][$key]->getCreatedTime());
                    $fecha=explode('-', $time[0]);
                    $leads[$page-1][$key]['fecha']=$fecha[2].'-'.$fecha[1].'-'.$fecha[0];
            
                }

                //dump('inicio ciclo');
                //dump($data);
                //dump($leads[$page-1]);
                $data= array_merge($data, $leads[$page-1]);
               // dump('fin ciclo');
                $code=$response->getHttpStatusCode();
                $page++;
            }
            catch(ZCRMException $e){
                $code=$e->getCode();
            }
        }
        return $data;
    }

    private function armarTablaUser(){
        $data = array();
        $page=1;
        $code=200;
        while ($code==200) {
            
            try{   
                # code...
                $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To get module instance
                $criteria="Representante_email:equals:".Auth::user('email')->email;

                $param_map=array("page"=>$page,"per_page"=>200); // key-value pair containing all the parameters
                $response = $moduleIns->searchRecordsByCriteria($criteria,$param_map) ;// To get module records// $criteria to search for  to search for// $param_map-parameters key-value pair - optional
                $records[$page-1] = $response->getData(); 

                $leads[$page-1] = array();
                foreach ($records[$page-1] as $key => $record) {
                    $leads[$page-1][$key] = array (  
                                            'id' => base64_encode($records[$page-1][$key]->getEntityId()),
                                            'Full_Name' => $records[$page-1][$key]->getFieldValue('Full_Name'),
                                            //'apellido' => $records[$page-1][$key]->getFieldValue('Last_Name'),
                                            'email' => $records[$page-1][$key]->getFieldValue('Email'), 
                                            'status' => $records[$page-1][$key]->getFieldValue('Lead_Status'), 
                                            //'Rep' =>
                                        );


                    $leads[$page-1][$key]['Rep']= method_exists( $records[$page-1][$key]->getFieldValue('Rep'), 'getLookupLabel') ? $records[$page-1][$key]->getFieldValue('Rep')->getLookupLabel() : null ;

                    $time=explode('T', $records[$page-1][$key]->getCreatedTime());
                    $fecha=explode('-', $time[0]);
                    $leads[$page-1][$key]['fecha']=$fecha[2].'-'.$fecha[1].'-'.$fecha[0];
            
                }

                //dump('inicio ciclo');
                //dump($data);
                //dump($leads[$page-1]);
                $data= array_merge($data, $leads[$page-1]);
               // dump('fin ciclo');
                $code=$response->getHttpStatusCode();
                $page++;
            }
            catch(ZCRMException $e){
                $code=$e->getCode();
            }
        }
        return $data;
    }

    

   
}
