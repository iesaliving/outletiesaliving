<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api\SalesManago;
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

    public function test()
    {
        $salesmanago = new SalesManago();
        // Carbon::createFromDate(2020,5,14); // pasar fecha especifica en Tz Mexico_City -5
        $today = Carbon::today();// => Fecha de Hoy en Tz Mexico_City -5

        // request API 
        $reqContactListCreated =  $salesmanago->getCredentials(); // api_key, secret_key, sha
        $reqContactListCreated["requestTime"] = Carbon::now()->timestamp * 1000;
        $reqContactListCreated["owner"] = 'Auxiliarmkt@iesa.cc';
        $reqContactListCreated["from"] = $today->copy()->startOfDay()->timestamp * 1000; // hoy a las 12:00: am (inicio del dia)
        $reqContactListCreated["to"] =  Carbon::now()->timestamp * 1000; // hoy hora actual.
        //work 
        //$reqContactListCreated["from"] = $today->copy()->startOfDay();//->format('Y-m-d H:i');
        //$reqContactListCreated["to"] =  Carbon::now();//->format('Y-m-d H:i');

        // response API 
        $resContactListCreated = $salesmanago->curlSm("https://app3.salesmanago.pl/api/contact/createdContacts", json_encode($reqContactListCreated));
        
        if(!empty($resContactListCreated) && $resContactListCreated["success"]){
            if(sizeof($resContactListCreated["createdContacts"]) > 0){
                $contactsIds = array();
                foreach($resContactListCreated["createdContacts"] as $created){
                    array_push($contactsIds, strtolower($created["email"]));
                }

                $reqDataContactCreated = $salesmanago->getCredentials();
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
}
