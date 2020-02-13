<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use Redirect;
use Mail;

class MailController extends Controller
{

    
    public function __construct()
    {
    }

    public function enviar(Request $request){


        $inputs = $request->all();

       
        $rule=array(
            'nombre' => 'required|string',
            'tel' => 'required|string',
            'email' => 'required|string|email',
        );

        if (isset($inputs['showroom'])) {
            $rule['showroom']='required|string';
        }

        if (isset($inputs['fecha'])) {
            $rule['fecha']='required|string';
        }

        $validator = \Validator::make($inputs,$rule);
 

        if ($validator->fails())
        {   
             return Redirect::back()->withErrors($validator)->withInput();
        }


        if (isset($inputs['email_envio'])) {
            $emails = [$inputs['email_envio']];
         }else{
            $emails = ['contacto@subzero-wolf.mx'];

         }
            array_push($emails,'onmigregor@gmail.com');

         if(isset($inputs['fecha'] )){
            $titulo_mail='Cita Showroom';
         }elseif(isset($inputs['demo'] )){
            $titulo_mail='Cooking Demo';
         }else {
            $titulo_mail='Formulario';
         }


        Mail::send('templeate.email', $inputs, function($message) use ($emails,$titulo_mail) {
            $message->to($emails);
            $message->subject($titulo_mail.' - IESA');
        });

            return redirect('/gracias');
    }
 
}
