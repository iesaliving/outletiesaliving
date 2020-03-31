<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use Redirect;
use Mail;
use App\Brand;

class MarcasController extends Controller
{

    
    public function __construct()
    {
    }

    
    public function subzero(Request $request){

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';

        $data = $this->datos('sub-zero');
        $hero = $this->image('sub-zero');

        return view('web.brands',compact('email','footer','data','hero'));

       // return view('sub-zero',compact('email','footer','data','hero'));

    }

    public function Wolf(){

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';

        $data = $this->datos('wolf');
        $hero = $this->image('wolf');

        //return view('wolf',compact('email','footer','data','hero'));
        return view('web.brands',compact('email','footer','data','hero'));
    }

    public function Cove(){

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';

        $data = $this->datos('cove');
        $hero = $this->image('cove');
        
        return view('web.cove',compact('email','footer','data','hero'));
       // return view('cove',compact('email','footer','data','hero'));
    }

    public function CocinaExt() {

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';

        $data = $this->datos('cocina-exterior');
        $hero = $this->image('cocina-exterior');

       // return view('exteriores',compact('email','footer','data','hero'));
       return view('web.brands',compact('email','footer','data','hero'));
    }

    public function Asko() {
        
        $footer='https://www.asko.com/mx/';
        $email="contacto@asko.com.mx";

        $data = $this->datos('asko');
        $hero = $this->image('asko');

       // return view('asko',compact('email','footer','data','hero'));
       return view('web.brands',compact('email','footer','data','hero'));
    }

    public function Dexa() {
        
        $footer='http://dexa.mx/';
        $email="contacto@dexa.mx";

        $data = $this->datos('dexa');
        $hero = $this->image('dexa');

       // return view('dexa',compact('email','footer','data','hero'));
       return view('web.brands',compact('email','footer','data','hero'));
    }

    public function Scotsman() {

        $footer='http://www.scotsman.mx/ ';
        $email="contacto@scotsman.mx";

        $data = $this->datos('scotsman');
        $hero = $this->image('scotsman');

        return view('web.scotsman',compact('email','footer','data','hero'));

        //return view('scotsman',compact('email','footer','data','hero'));
    }

    public function plumWine() {

        $footer='http://www.scotsman.mx/ ';
        $email="contacto@scotsman.mx";

        // $data = $this->datos('scotsman');
        //$hero = $this->image('scotsman');

        return view('plum-wine',compact('email','footer'/*,'data','hero'*/));
    }

    public function datos($slug = null){

        $data   = Brand::where('slug', '=', $slug)->firstOrFail();
        return $data;

    }

    public function image($slug = null){

        $hero = \DB::table('images')
                    ->where('source',$slug)->orderBy('id')->get();
        return $hero;

    }


 
}
