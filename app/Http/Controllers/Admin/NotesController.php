<?php

namespace App\Http\Controllers\Admin;
ini_set('max_execution_time', 300); //3 minutes

use Yajra\DataTables\Facades\DataTables;
use zcrmsdk\crm\exception\ZCRMException;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use zcrmsdk\crm\crud\ZCRMRecord;
use zcrmsdk\crm\crud\ZCRMNote;
use zcrmsdk\oauth\ZohoOAuth;
use App\Api\SalesManago;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use SimpleXMLElement;
use Redirect;
use Auth;





class NotesController extends Controller
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


    public function store(Request $request)
    {
        $leadId=base64_decode($request->input('leadsId'));

        $record = ZCRMRestClient::getInstance()->getRecordInstance("Leads", $leadId); // To get record instance
        $noteIns = ZCRMNote::getInstance($record, null); // to get the note instance
        $noteIns->setTitle($request->input('Title')); // to set the note title
        $noteIns->setContent($request->input('Content')); // to set the note content
        $responseIns = $record->addNote($noteIns); // to add the note
        
        if ($responseIns->getStatus()=='success') {
            
            if($request->file('Attachment')){

                $data=$responseIns->getData();//data
                $noteId=$data->getId();//id Note

                $file = $request->file('Attachment');//archivo
                $extension=$file->getClientOriginalExtension();//extension documento
                $name ='note-'.$noteId.".".$file->getClientOriginalExtension();//nombre documento
                $file->move("noteFiles",$name);//mover a local
                $pathInfo='noteFiles/note-'.$noteId.".".$extension;//path info local


                $responseUpload=$this->AttachmentToNote($noteId,$pathInfo);// subir a zoho crm

                \File::delete($pathInfo);
                return $responseUpload->getStatus();

            }
            else{
                return $responseIns->getStatus();
            }

        }

        
    }



    private function  AttachmentToNote($noteId , $pathInfo){
        $filepath = $pathInfo;
        $noteIns = ZCRMNote::getInstance(null, $noteId); // to get the note instance
        $response = $noteIns->uploadAttachment($filepath);
        
        return $response;
    }


   
}
