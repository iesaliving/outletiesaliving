<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;

class UpdateLeadDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lead:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cron para actualizar leads';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();


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
   
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /*
        $modulo = ZCRMRestClient::getInstance()->getModuleInstance("Leads"); // To 
        $param_map=array("page" => 1, "per_page"=>10); 
        $response = $modulo->getRecords($param_map);
        $leads = $response->getData();
        
        foreach($leads as $lead){
            
            $this->info("Lead ". $lead->getFieldValue('Full_Name') );
        }
        */

    }
}
