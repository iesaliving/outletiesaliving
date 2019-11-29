<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use Redirect;
use Mail;

class MailController extends Controller
{

    private $token = "738b2579c2f7c58df29b1c1f97b27a23";
    
    public function __construct()
    {
    }

    public function enviar(Request $request){


        $inputs = $request->all();


        $rule=array(
            'tel' => 'required|string',
            'proyecto' => 'required|string',
            'nombre' => 'required|string',
            'email' => 'required|string|email',
            'comentarios' => 'required|string',
        );

        $validator = \Validator::make($inputs,$rule);
 

        if ($validator->fails())
        {   
             return Redirect::back()->withErrors($validator)->withInput();
        }




        $emails='onmigregor@gmail.com';
        Mail::send('templeate.email', $request->all(), function($message) use ($emails) {
            $message->to($emails);
            $message->subject('Formulario - IESA');
        });
    }
 
}
