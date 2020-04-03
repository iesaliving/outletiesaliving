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
        $tag  ='Sub-Zero';
        $herod = 'hero.subzero';
        $herom = 'hero-mobile.subzero';

        return view('web.brands',compact('email','footer','data','hero','tag','herod','herom'));

       // return view('sub-zero',compact('email','footer','data','hero','tag'));

    }

    public function Wolf(){

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';

        $data = $this->datos('wolf');
        $hero = $this->image('wolf');
        $tag ='Wolf';
        $herod = 'hero.wolf';
        $herom = 'hero-mobile.wolf';

        return view('web.brands',compact('email','footer','data','hero','tag','herod','herom'));

        //return view('wolf',compact('email','footer','data','hero','tag'));
    }

    public function Cove(){

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';

        $data = $this->datos('cove');
        $hero = $this->image('cove');
        $tag ='Cove';

        return view('web.cove',compact('email','footer','data','hero','tag'));

       // return view('cove',compact('email','footer','data','hero','tag'));
    }

    public function CocinaExt() {

        $email="contacto@subzero-wolf.mx";
        $footer='https://mx.subzero-wolf.com/es/international-landing?countryCode=RU&requestedUrl=/es/sub-zero/full-size-refrigeration';

        $data = $this->datos('cocina-exterior');
        $hero = $this->image('cocina-exterior');
        $tag ='Cocina Exterior';
        $herod = 'hero.exteriores';
        $herom = 'hero-mobile.exteriores';

        return view('web.brands',compact('email','footer','data','hero','tag','herod','herom'));

       // return view('exteriores',compact('email','footer','data','hero','tag'));
       
    }

    public function Asko() {
        
        $footer='https://www.asko.com/mx/';
        $email="contacto@asko.com.mx";

        $data = $this->datos('asko');
        $hero = $this->image('asko');
        $tag ='Asko';
        $herod = 'hero.asko';
        $herom = 'hero-mobile.asko';

        return view('web.brands',compact('email','footer','data','hero','tag','herod','herom'));
    }

    public function Dexa() {
        
        $footer='http://dexa.mx/';
        $email="contacto@dexa.mx";

        $data = $this->datos('dexa');
        $hero = $this->image('dexa');
        $tag ='Dexa';
        $herod = 'hero.dexa';
        $herom = 'hero-mobile.dexa';

        return view('web.brands',compact('email','footer','data','hero','tag','herod','herom'));
    }

    public function Scotsman() {

        $footer='http://www.scotsman.mx/ ';
        $email="contacto@scotsman.mx";

        $data = $this->datos('scotsman');
        $hero = $this->image('scotsman');
        $tag ='Scotsman';

        return view('web.scotsman',compact('email','footer','data','hero','tag'));

        //return view('scotsman',compact('email','footer','data','hero','tag'));
    }

    public function plumWine() {

        $footer='http://www.scotsman.mx/ ';
        $email="contacto@scotsman.mx";

        $data = $this->datos('plum-wine');
        $hero = $this->image('plum-wine');
        $tag ='Plum Wine';

        return view('web.plum-wine',compact('email','footer','data','hero','tag'));
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
