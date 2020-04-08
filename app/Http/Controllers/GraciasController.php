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
        $text0='Gracias';
        $text1='Agradecemos de antemano el interés en nuestras marcas.';
        $text2='A la brevedad posible nos pondremos en contacto con usted para poder atender su petición.';
        
        return view('gracias',compact('text0','text1','text2'));
    }

    public function GraciasCat(Request $request){
        $text0='GRACIAS';
        $text1='Agradecemos de antemano el interés en nuestras marcas.';
        $text2=' Le hemos enviado un correo electrónico con enlace a la descarga del catálogo, con todos los detalles sobre los productos de marca.';
        return view('gracias',compact('text0','text1','text2'));
    }


    public function GraciasLlamada(Request $request){
        $text0='Gracias';
        $text1='Agradecemos de antemano el interés en nuestras marcas.';
        $text2='La llamada ha sido confirmada exitosamente. Uno de los especialistas IESA le esperará en la hora y fecha indicada por usted. Le enviaremos un recordatorio un día antes de la llamada.';
        return view('gracias',compact('text0','text1','text2'));
    }


    public function GraciasCookdemo(Request $request){
        $text0='GRACIAS POR SU INTERÉS EN ASISTIR A UNO DE NUESTROS COOKING DEMO ';
        $text1='Recuerde que aún su asistencia al Cooking Demo no está confirmada';
        $text2='En breve nuestro equipo se pondrá en contacto con usted para confirmar su visita';
        return view('gracias',compact('text0','text1','text2'));
    }


    public function GraciasShowRoom(Request $request){
        $text0='GRACIAS POR SU INTERÉS EN ASISTIR A UNO DE NUESTROS SHOWROOM, SU VISITA HA SIDO CONFIRMADA EXITOSAMENTE';
        $text1='';
        $text2='Nuestro equipo le esperará en la hora y fecha indicada por usted. Le enviaremos un recordatorio un día antes de su visita';
        return view('gracias',compact('text0','text1','text2'));
    }

    public function GraciasRating(Request $request){

        $data=session('dataGracias');
        $text0='Ya hemos recibido tu rating. Si deseas comunicarte con nuestro equipo, contáctanos al <a href="tel:+5215552809648">Tel: +52 (1) 55 5280 9648</a>';
        $text1='';
        $text2='';
        return view('gracias',compact('text0','text1','text2','data'));
    }


    


 
}
