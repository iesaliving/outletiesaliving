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
        $yesterday =Carbon::createFromDate('2020', '5', '27', "America/Mexico_City");
        //dd($yesterday);
        $connect =  $salesmanago->getCredentials();
        //$connect["requestTime"] = Carbon::now()->timestamp;
       // $connect["email"] = array("jumaroa@gmail.com");
        //$connect["from"] = $yesterday->copy()->startOfDay();
        //$connect["to"] =  $yesterday->endOfDay();
        
        //return $connect;
       //$response = $salesmanago->curlSm("https://app3.salesmanago.pl/api/contact/createdContacts", json_encode($connect));
       $response = $salesmanago->curlSm("https://app3.salesmanago.pl/api/contact/list", json_encode($connect));
       //dd($response);
       return $response;
    }
}
