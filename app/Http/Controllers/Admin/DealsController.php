<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use zcrmsdk\crm\exception\ZCRMException;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use Illuminate\Support\Facades\Gate;
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

        if ((Gate::check('admin_zoho'))) {
            
            $records=$this->armarTablaAdmin();

        }else{

            $records=$this->armarTablaUser();

        }

        $respuesta['data'] = $records;
        //dd($respuesta['data']);

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

        return view('admin.deals.form', compact('contacts','accounts','marcas', 'ubicaciones' , 'stages' , 'repres','dealers'));
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
        $record->setFieldValue("Dealer2", $request->input('Dealer2'));
        $record->setFieldValue("Marca", $request->input('marca'));
        $record->setFieldValue("Email_de_Dealer", $request->input('Email_de_Dealer'));
        $record->setFieldValue("Producto", $request->input('producto'));
        $record->setFieldValue("Lead_Source", $request->input('Lead_Source'));
        $record->setFieldValue("Reps", $request->input('Reps'));
        $record->setFieldValue("Nombre_de_vendedor_de_dealer", $request->input('dealer_name'));
        $record->setFieldValue("Representante_email", $request->input('Representante_email'));
        $record->setFieldValue("UTM_Source", $request->input('UTM_Source'));
        $record->setFieldValue("Lead_Source", $request->input('Lead_Source'));
        $record->setFieldValue("UTM_Anuncio_ID", $request->input('UTM_Anuncio_ID'));
        $record->setFieldValue("UTM_Campaign_Name", $request->input('UTM_Campaign_Name'));


        
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

   //dd($record);

        $arrayData['dealsId']=$request->input('dealsId');
        $arrayData['Deal_Name']=$record->getFieldValue("Deal_Name");
        $arrayData['Stage']=$record->getFieldValue("Stage");
        $arrayData['Monto_estimado_del_orden_de_compra']=$record->getFieldValue("Monto_estimado_del_orden_de_compra");
        $arrayData['Closing_Date']=$this->FechaCrmAdmin($record->getFieldValue("Closing_Date"));
        $arrayData['Contact_Apellido']=$record->getFieldValue("Contact_Apellido");
        $arrayData['Estado']=$record->getFieldValue("Estado");
        $arrayData['Next_Step']=$record->getFieldValue("Next_Step");
        $arrayData['Marca']=$record->getFieldValue("Marca");
        $arrayData['Email_de_Dealer']=$record->getFieldValue("Email_de_Dealer");
        $arrayData['Producto']=$record->getFieldValue("Producto");
        $arrayData['Nombre_de_vendedor_de_dealer']=$record->getFieldValue("Nombre_de_vendedor_de_dealer");
        $arrayData['Description']=$record->getFieldValue("Description");
        $arrayData['Representante_email']=$record->getFieldValue("Representante_email");
        $arrayData['Rating_total_del_servicio_de_instalaci_n']=$record->getFieldValue("Rating_total_del_servicio_de_instalaci_n");

        $arrayData['Mensaje_rating_de_instalaci_n']=$record->getFieldValue("Mensaje_rating_de_instalaci_n");
        $arrayData['Solictar_Rating_de_Instalaci_n']=$record->getFieldValue("Solictar_Rating_de_Instalaci_n");

        $arrayData['Fecha_de_cooking_demo']=$this->FechaCrmAdmin($record->getFieldValue("Fecha_de_cooking_demo"));
        $arrayData['Estatus_de_Cooking_Demo']=$record->getFieldValue("Estatus_de_Cooking_Demo");
        $arrayData['Invitar_a_Cooking_demo']=$record->getFieldValue("Invitar_a_Cooking_demo");

        if (method_exists($record->getFieldValue("Reps"),'getEntityId')) {
            $arrayData['Reps']=$record->getFieldValue("Reps")->getEntityId();
        }else{
            $arrayData['Reps']=null;
        }


        if (method_exists($record->getFieldValue("Contact_Name"),'getEntityId')) {
            $arrayData['Contact_Name']=$record->getFieldValue("Contact_Name")->getEntityId();
        }else{
            $arrayData['Contact_Name']=null;
        }

        if (method_exists($record->getFieldValue("Dealer2"),'getEntityId')) {
            $arrayData['Dealer2']=$record->getFieldValue("Dealer2")->getEntityId();
        }else{
            $arrayData['Dealer2']=null;
        }

        if (method_exists($record->getFieldValue("Account_Name"),'getEntityId')) {
            $arrayData['Account_Name']=$record->getFieldValue("Account_Name")->getEntityId();
        }else{
            $arrayData['Account_Name']=null;
        }

        $arrayData['UTM_Source']=$record->getFieldValue("UTM_Source");
        $arrayData['Lead_Source']=$record->getFieldValue("Lead_Source");
        $arrayData['UTM_Anuncio_ID']=$record->getFieldValue("UTM_Anuncio_ID");
        $arrayData['UTM_Campaign_Name']=$record->getFieldValue("UTM_Campaign_Name");
        $arrayData['Enviar_a_Dealer']=$record->getFieldValue("Enviar_a_Dealer");
        $arrayData['Enlace_a_cotizacion']=$record->getFieldValue("Enlace_a_cotizacion");
        $arrayData['Contactar_Dealer_y_cliente_con_info_adiccon_l']=$record->getFieldValue("Contactar_Dealer_y_cliente_con_info_adiccon_l");
        $arrayData['Enlace_a_informaci_n_addicion_l']=$record->getFieldValue("Enlace_a_informaci_n_addicion_l");
        $arrayData['Showroom']=$record->getFieldValue("Showroom");
        $arrayData['Fecha_de_la_llamada']=$this->FechaCrmAdmin($record->getFieldValue("Fecha_de_la_llamada"));
        $arrayData['Fecha_de_visita_al_Showroom']=$this->FechaCrmAdmin($record->getFieldValue("Fecha_de_visita_al_Showroom"));
        $arrayData['Hora_de_la_llamada']=$record->getFieldValue("Hora_de_la_llamada");
        $arrayData['Hora_de_visita_al_showroom']=$record->getFieldValue("Hora_de_visita_al_showroom");

        $data = (object) $arrayData;

        //dd($data);

        $marcas=$this->fields('4434756000000273884','Deals');//id Fiels Obtenidos de $this->campos()

        $ubicaciones=$this->fields('4434756000000271820','Deals');//id Fiels Obtenidos de $this->campos()

        $stages=$this->fields('4434756000000002565','Deals');//id Fiels Obtenidos de $this->campos()

        $LeadSources=$this->fields('4434756000000002573','Deals');//id Fiels Obtenidos de $this->campos()

        $EstatusCD=$this->fields('4434756000000273689','Deals');//id Fiels Obtenidos de $this->campos()

        $cityShowrooms=$this->fields('4434756000000276187','Deals');//id Fiels Obtenidos de $this->campos()



        $dealers=$this->dealers();

        $accounts=$this->accounts();

        $contacts=$this->contacts();
        
        $repres=$this->representantes();


        $contactInfo=$this->getContactInfo($record->getFieldValue("Contact_Name")->getEntityId());

        //dd($contactInfo);

        return view('admin.deals.form', compact('contacts','accounts','marcas', 'ubicaciones' , 'stages' , 'repres','dealers','data','LeadSources','EstatusCD','cityShowrooms','contactInfo'));


    }

    public function update(Request $request){
        
       // dump($request->input());
        $dealsId=base64_decode($request->input('dealsId'));

        $retVal = ($request->input('Enviar_a_Dealer')=='on') ? true : false ;

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); 
        
        $records = array();
        $record = ZCRMRecord::getInstance("Deals", $dealsId);

        $record->setFieldValue("Deal_Name", $request->input('Deal_Name'));
        $record->setFieldValue("Stage", $request->input('Stage'));
        $record->setFieldValue("Account_Name", $request->input('Account_Name'));
        $record->setFieldValue("Monto_estimado_del_orden_de_compra", str_replace ( ",", '', $request->input('Monto_estimado_del_orden_de_compra')));
        $record->setFieldValue("Contact_Name", $request->input('Contact_Name'));
        $record->setFieldValue("Closing_Date", $this->FechaZoho($request->input('Closing_Date')));
        $record->setFieldValue("Contact_Apellido", $request->input('Contact_Apellido'));
        $record->setFieldValue("propietario", $request->input('propietario'));
        $record->setFieldValue("type", $request->input('type'));
        $record->setFieldValue("Estado", $request->input('Estado'));
        $record->setFieldValue("Next_Step", $request->input('Next_Step'));
        $record->setFieldValue("Dealer2", $request->input('Dealer2'));
        $record->setFieldValue("Nombre_de_vendedor_de_dealer", $request->input('Nombre_de_vendedor_de_dealer'));
        
        $record->setFieldValue("Marca", $request->input('Marca'));
        $record->setFieldValue("Email_de_Dealer", $request->input('Email_de_Dealer'));
        $record->setFieldValue("Producto", $request->input('Producto'));
        $record->setFieldValue("dealer_name", $request->input('dealer_name'));
        $record->setFieldValue("Reps", $request->input('Reps'));
        $record->setFieldValue("Representante_email", $request->input('Representante_email'));
        
        $record->setFieldValue("Enviar_a_Dealer",($request->input('Enviar_a_Dealer')=='on') ? true : false );



        $record->setFieldValue("Contactar_Dealer_y_cliente_con_info_adiccon_l", ($request->input('Contactar_Dealer_y_cliente_con_info_adiccon_l')=='on') ? true : false );
       
        $record->setFieldValue("Enlace_a_informaci_n_addicion_l", $request->input('Enlace_a_informaci_n_addicion_l'));
        $record->setFieldValue("Enlace_a_cotizacion", $request->input('Enlace_a_cotizacion'));
        $record->setFieldValue("Showroom", $request->input('Showroom'));
        $record->setFieldValue("Fecha_de_la_llamada", $this->FechaZoho($request->input('Fecha_de_la_llamada')));
        $record->setFieldValue("Fecha_de_visita_al_Showroom", $this->FechaZoho($request->input('Fecha_de_visita_al_Showroom')));
        $record->setFieldValue("Hora_de_la_llamada", $request->input('Hora_de_la_llamada'));
        $record->setFieldValue("Hora_de_visita_al_showroom", $request->input('Hora_de_visita_al_showroom'));
        $record->setFieldValue("Invitar_a_Cooking_demo", ($request->input('Invitar_a_Cooking_demo')=='on') ? true : false );
        $record->setFieldValue("Fecha_de_cooking_demo", $this->FechaZoho($request->input('Fecha_de_cooking_demo')));
        $record->setFieldValue("Estatus_de_Cooking_Demo", $request->input('Estatus_de_Cooking_Demo'));
        $record->setFieldValue("Solictar_Rating_de_Instalaci_n",($request->input('Contactar_Dealer_y_cliente_con_info_adiccon_l')=='on') ? true : false );
        $record->setFieldValue("Mensaje_rating_de_instalaci_n", $request->input('Mensaje_rating_de_instalaci_n'));
        $record->setFieldValue("Rating_total_del_servicio_de_instalaci_n", $request->input('Rating_total_del_servicio_de_instalaci_n'));
        $record->setFieldValue("Description", $request->input('Description'));
        $record->setFieldValue("UTM_Source", $request->input('UTM_Source'));
        $record->setFieldValue("Lead_Source", $request->input('Lead_Source'));
        $record->setFieldValue("UTM_Anuncio_ID", $request->input('UTM_Anuncio_ID'));
        $record->setFieldValue("UTM_Campaign_Name", $request->input('UTM_Campaign_Name'));


  
  





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
        $arrayData['email']=$this->getContactEmail($record->getFieldValue("Contact_Name")->getEntityId());
        }else{
            $arrayData['email']=null;
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

        //dd($record);
        $arrayData['dealsId']=$request->input('dealsId');
        $arrayData['contact_Name']=$record->getFieldValue("Contact_Name")->getLookupLabel();
        if (method_exists($record->getFieldValue("Contact_Name"),'getEntityId')) {
        $arrayData['email']=$this->getContactEmail($record->getFieldValue("Contact_Name")->getEntityId());
        }else{
            $arrayData['email']=null;
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
        $record->setFieldValue("Estatus_de_Cooking_Demo", "Invitado");

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

      //  dump($record);
        
        $arrayData['dealsId']=$request->input('dealsId');
        $arrayData['contact_Name']=$record->getFieldValue("Contact_Name")->getLookupLabel();
        $arrayData['Email_de_Dealer']=$record->getFieldValue("Email_de_Dealer");
        $arrayData['Enlace_a_cotizacion']=$record->getFieldValue("Enlace_a_cotizacion");
        $arrayData['Enlace_a_informaci_n_addicion_l']=$record->getFieldValue("Enlace_a_informaci_n_addicion_l");
        if (method_exists($record->getFieldValue("Contact_Name"),'getEntityId')) {
        $arrayData['email']=$this->getContactEmail($record->getFieldValue("Contact_Name")->getEntityId());
        }else{
            $arrayData['Dealer2']=null;
        }

        if (method_exists($record->getFieldValue("Dealer2"),'getEntityId')) {
            $arrayData['Dealer2']=$record->getFieldValue("Dealer2")->getEntityId();
        }else{
            $arrayData['Dealer2']=null;
        }
        $dealers=$this->dealers();

        $data = (object) $arrayData;

         //dd($data);

        return view('admin.deals.precotizar', compact('data','dealers'));
        
    }

    public function storePreco(Request $request){
        
        $dealsId=base64_decode($request->input('dealsId'));

        //dd($request->input());
        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); 
        
        $records = array();

        $record = ZCRMRecord::getInstance("Deals", $dealsId);
        $record->setFieldValue("Enviar_a_Dealer", true);
        $record->setFieldValue("Dealer2", $request->input('Dealer2'));
        
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
        //dd($zohoRespuesta);



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
       // $param_map = array("fields"=>"Deal_Name,Stage,Account_Name,Monto_estimado_del_orden_de_compra,Type,Contact_Name,Closing_Date,Contact_Apellido,Estado,Next_Step,Dealer2,Marca,Email_de_Dealer,Producto,Lead_Source,Representante,Dealer,Nombre_de_vendedor_de_dealer,Representante,Representante_email,Enlace_a_cotizacion,Enlace_a_informaci_n_addicion_l"); // key-value pair containing all the
        $response = $moduleIns->getRecord($dealsId); // To get module record
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
            $repres[$key]['name']=$dealer->getFieldValue("Name");

        }

     //  dd($repres);
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

    public function getContactEmail($contactId){

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Contacts"); // To get module instance
        $param_map = array("fields"=>"Email"); // key-value pair containing all the params - optional
        $header_map = array("header_name"=>"header_value"); // key-value pair containing all the headers - optional
        $response = $moduleIns->getRecord($contactId,$param_map,$header_map); // To get module record
        $record = $response->getData(); // To get response data

        return $record->getFieldValue("Email");

    }

    public function getContactInfo($contactId){

        $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Contacts"); // To get module instance
        //$param_map = array("fields"=>"Email"); // key-value pair containing all the params - optional
        //$header_map = array("header_name"=>"header_value"); // key-value pair containing all the headers - optional
        $response = $moduleIns->getRecord($contactId); // To get module record
        $record = $response->getData(); // To get response data

        
        $info = array   (
                            'Full_Name' => $record->getFieldValue("Full_Name"), 
                            'Phone' => $record->getFieldValue("Phone"), 
                            'Email' => $record->getFieldValue("Email"), 
                        );
        $data = (object) $info;

        return $data;

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
                $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // To 
                $param_map=array("page"=>$page,"per_page"=>200); 
                //$header_map = array("if-modified-since"=>"2019-09-15T15:26:49+05:30"); 
                $response = $moduleIns->getRecords($param_map); 
                $records[$page-1] = $response->getData(); 

                $deals[$page-1] = array();
                foreach ($records[$page-1] as $key => $record) {
      
                    $contactName = $records[$page-1][$key]->getFieldValue("Contact_Name");
                    $deals[$page-1][$key] = array (  
                                                'id' => base64_encode($records[$page-1][$key]->getEntityId()),
                                                'contactName' => empty($records[$page-1][$key]->getFieldValue("Contact_Name")) ? $contactName : $contactName->getLookupLabel(),
                                                'stage' => $records[$page-1][$key]->getFieldValue('Stage'), 
                                                'email' => empty($records[$page-1][$key]->getFieldValue("Contact_Name")) ? $contactName : $this->getContactEmail($records[$page-1][$key]->getFieldValue("Contact_Name")->getEntityId()),
                                        );

                    $deals[$page-1][$key]['Reps']= method_exists( $records[$page-1][$key]->getFieldValue('Reps'), 'getLookupLabel') ? $records[$page-1][$key]->getFieldValue('Reps')->getLookupLabel() : null ;

                    $time=explode('T', $records[$page-1][$key]->getCreatedTime());
                    $fecha=explode('-', $time[0]);
                    $deals[$page-1][$key]['fecha']=$fecha[2].'-'.$fecha[1].'-'.$fecha[0];
                }

                //dump('inicio ciclo');
                //dump($data);
                //dump($deals[$page-1]);
                $data= array_merge($data, $deals[$page-1]);
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
                $moduleIns = ZCRMRestClient::getInstance()->getModuleInstance("Deals"); // To get module instance
                $criteria="Representante_email:equals:".Auth::user('email')->email;

                $param_map=array("page"=>$page,"per_page"=>200); // key-value pair containing all the parameters
                $response = $moduleIns->searchRecordsByCriteria($criteria,$param_map) ;// To get module records// $criteria to search for  to search for// $param_map-parameters key-value pair - optional
                $records[$page-1] = $response->getData(); 

                $deals[$page-1] = array();
                foreach ($records[$page-1] as $key => $record) {
      

                    $deals[$page-1][$key] = array (  
                                                'id' => base64_encode($records[$page-1][$key]->getEntityId()),
                                                'contactName' => $records[$page-1][$key]->getFieldValue("Contact_Name")->getLookupLabel(),
                                                'stage' => $records[$page-1][$key]->getFieldValue('Stage'), 
                                                'email' =>$this->getContactEmail($records[$page-1][$key]->getFieldValue("Contact_Name")->getEntityId()),
                                        );
                    $deals[$page-1][$key]['Reps']= method_exists( $records[$page-1][$key]->getFieldValue('Reps'), 'getLookupLabel') ? $records[$page-1][$key]->getFieldValue('Reps')->getLookupLabel() : null ;

                    $time=explode('T', $records[$page-1][$key]->getCreatedTime());
                    $fecha=explode('-', $time[0]);
                    $deals[$page-1][$key]['fecha']=$fecha[2].'-'.$fecha[1].'-'.$fecha[0];
                }

                //dump('inicio ciclo');
                //dump($data);
                //dump($deals[$page-1]);
                $data= array_merge($data, $deals[$page-1]);
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
