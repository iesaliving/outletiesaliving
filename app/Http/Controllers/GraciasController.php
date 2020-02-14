<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use Redirect;
use Mail;

class GraciasController extends Controller
{
    
    public function __construct()
    {

    }

    public function GraciasDefault(Request $request){
        $text1='Agradecemos de antemano el interés en nuestras marcas.';
        $text2='A la brevedad posible nos pondremos en contacto con usted para poder atender su petición.';
        return view('gracias',compact('text1','text2'));
    }

    public function GraciasCat(Request $request){
        $text1='Agradecemos de antemano el interés en nuestras marcas.';
        $text2=' Le hemos enviado un correo electrónico con enlace a la descarga del catálogo, con todos los detalles sobre los productos de marca.';
        return view('gracias',compact('text1','text2'));
    }


 
}
