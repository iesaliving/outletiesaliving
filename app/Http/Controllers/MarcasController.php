<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use Redirect;
use Mail;

class MarcasController extends Controller
{

    
    public function __construct()
    {
    }

    public function subzero(Request $request){

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';
        return view('sub-zero',compact('email','footer'));

    }

    public function Wolf(){

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';
        return view('wolf',compact('email','footer'));
    }

    public function Cove(){

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';
        return view('cove',compact('email','footer'));
    }

    public function CocinaExt(){

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';
        return view('exteriores',compact('email','footer'));
    }

    public function Asko(){
        
        $footer='https://www.asko.com/mx/';
        $email="contacto@asko.com.mx";
        return view('asko',compact('email','footer'));
    }

    public function Dexa(){
        
        $footer='http://dexa.mx/';
        $email="contacto@dexa.mx";
        return view('dexa',compact('email','footer'));
    }

    public function Scotsman(){
        $footer='http://www.scotsman.mx/ ';
        $email="contacto@scotsman.mx";
        return view('scotsman',compact('email','footer'));
    }

 
}
