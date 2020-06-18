<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Api\SalesManago;
use Pixers\SalesManagoAPI\Client;
use Pixers\SalesManagoAPI\SalesManago;

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


    public function test(){
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
    }
}
