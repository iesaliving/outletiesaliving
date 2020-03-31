<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api\SalesManago;
use SimpleXMLElement;
use Carbon\Carbon;
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

    public function submitContacto(Request $request){
        $inputs = $request->input();
        $rule=array(
            'nombre' => 'required|string',
            'tel' => 'required|string',
            'email' => 'required|string|email',
        );

        $validator = \Validator::make($inputs,$rule);
 

        if ($validator->fails())
        {   
             return Redirect::back()->withErrors($validator)->withInput();
        }


        $var=new SalesManago();
        $var->setSmEmail($inputs['email']);
        $var->setEstado($inputs['estado']);
        $var->setSmNombre($inputs['nombre']);
        $var->setSmPhone($inputs['tel']);
        $var->setTag('CONTACTO');
        $var->setUtmSource($request->input('utm_source'));
        $var->setUtmCampaign($request->input('utm_campaign'));
        $var->setUtmAnuncioId($request->input('utm_anuncio_id'));
        $response=$var->upsert();

         if ($response['success']==true && !empty($response['contactId']) &&$response['message']==null) {
            
            return redirect('/gracias/contacto');

         }else{
            abort(404);
         }
        


    }

    public function submitDemo(Request $request){
        $inputs = $request->input();
        $rule=array(
            'nombre' => 'required|string',
            'tel' => 'required|string',
            'email' => 'required|string|email',
        );

        $validator = \Validator::make($inputs,$rule);
 

        if ($validator->fails())
        {   
             return Redirect::back()->withErrors($validator)->withInput();
        }


        $var=new SalesManago();
        $var->setSmEmail($inputs['email']);
        $var->setEstado($inputs['estado']);
        $var->setSmNombre($inputs['nombre']);
        $var->setSmPhone($inputs['tel']);
        $var->setTag('COOKING_DEMO');
        $var->setUtmSource($request->input('utm_source'));
        $var->setUtmCampaign($request->input('utm_campaign'));
        $var->setUtmAnuncioId($request->input('utm_anuncio_id'));
        $response=$var->upsert();

         if ($response['success']==true && !empty($response['contactId']) &&$response['message']==null) {
            
            return redirect('/gracias-cookingdemo');

         }else{
            abort(404);
         }
        


    }

    public function submitShowroom(Request $request){
        $inputs = $request->input();
        $rule=array(
            'nombre' => 'required|string',
            'tel' => 'required|string',
            'email' => 'required|string|email',
            'showroom' => 'required|string',
        );

        $validator = \Validator::make($inputs,$rule);
 

        if ($validator->fails())
        {   
             return Redirect::back()->withErrors($validator)->withInput();
        }


        if ($inputs['showroom']=='CIUDAD DE MÉXICO') {
            $tag='SHOWROOM_CDMX';
        }elseif($inputs['showroom']=='MONTERREY'){
            $tag='SHOWROOM_MONTERREY';
        }
        $var=new SalesManago();
        $var->setSmEmail($inputs['email']);
        $var->setEstado($inputs['estado']);
        $var->setSmNombre($inputs['nombre']);
        $var->setSmPhone($inputs['tel']);
        $var->setTag($tag);
        $var->setCiudad($inputs['showroom']);
        $var->setFecha($inputs['fecha']);
        $var->setUtmSource($request->input('utm_source'));
        $var->setUtmCampaign($request->input('utm_campaign'));
        $var->setUtmAnuncioId($request->input('utm_anuncio_id'));
        $response=$var->upsert();

         if ($response['success']==true && !empty($response['contactId']) &&$response['message']==null) {
            
            return redirect('/gracias-Showroom');

         }else{
            abort(404);
         }
        
    }

    public function submitBrand(Request $request){
        $inputs = $request->input();
       
        $rule=array(
            'nombre' => 'required|string',
            'tel' => 'required|string',
            'email' => 'required|string|email',
            'cBrand' => 'required|string',
        );

        $validator = \Validator::make($inputs,$rule);
 

        if ($validator->fails())
        {   
             return Redirect::back()->withErrors($validator)->withInput();
        }

     

        $tag=strtoupper(str_replace("-","_",$inputs['cBrand'])).'_CITA';

        $var=new SalesManago();
        $var->setSmEmail($inputs['email']);
        $var->setEstado($inputs['estado']);
        $var->setSmNombre($inputs['nombre']);
        $var->setSmPhone($inputs['tel']);
        $var->setTag($tag);
        $var->setBrand(ucwords($inputs['cBrand']));
        $var->setMensaje($inputs['comentarios']);
        $var->setUtmSource($request->input('utm_source'));
        $var->setUtmCampaign($request->input('utm_campaign'));
        $var->setUtmAnuncioId($request->input('utm_anuncio_id'));

        $response=$var->upsert();
         if ($response['success']==true && !empty($response['contactId']) &&$response['message']==null) {
            
            return redirect("/gracias/".$inputs['cBrand']);

         }else{
            abort(404);
         }
        


    }


    public function submitCalendry(Request $request){


        //dump(hash('md5', $request->input('event_type_name')));

        $division=explode("T",$request->input('event_start_time'));

        $fecha=Carbon::createFromFormat('Y-m-d', $division[0]);
        //dump($division);

        //dump($fecha->format('d-m-Y'));

        $var=new SalesManago();
        $var->setSmEmail($request->input('invitee_email'));
        $var->setSmNombre($request->input('invitee_full_name'));
        $var->setSmPhone('');
        $var->setMensaje($request->input('answer_1'));
        $var->setUtmSource($request->input('utm_source'));
        $var->setUtmCampaign($request->input('utm_campaign'));
        $var->setUtmAnuncioId($request->input('utm_medium'));


        switch (hash('md5', $request->input('event_type_name'))) {
                   


                        //Llamada con especialista - México
           //    http://lafamiliaperfecta.com/submit-calendry?assigned_to=Grupo%20IESA%20&event_type_uuid=ACHKXO43RXHNSNPP&event_type_name=Llamada%20con%20especialista%20-%20M%C3%A9xico&event_start_time=2020-03-24T12%3A30%3A00-04%3A00&event_end_time=2020-03-24T13%3A00%3A00-04%3A00&invitee_uuid=EFPUUHN3R4SUVUIG&invitee_full_name=test%20name&invitee_email=testLlamadaLatam@mail.com&answer_1=testmensaje
                    case '3ec30e105ebed6cb52f4b742ee040246':
                        $var->sethoraLlamada($division[1]);
                        $var->setFechaLlamada($fecha->format('d-m-Y'));
                        $var->setPais('Mexico');
                        $var->setTag('LLAMADA_MEXICO');
                        $gracias='gracias-llamada';
                        break;



                        //Llamada con especialista - LATAM
            //    http://lafamiliaperfecta.com/submit-calendry?assigned_to=Grupo%20IESA%20&event_type_uuid=HBDLSN36VP6H6EFD&event_type_name=Llamada%20con%20especialista%20-%20LATAM&event_start_time=2020-03-24T12%3A00%3A00-04%3A00&event_end_time=2020-03-24T12%3A30%3A00-04%3A00&invitee_uuid=DANVTFI2ZCSNLIDW&invitee_full_name=testName&invitee_email=testLlamadaCDMX@mail.com&answer_1=mensaje
                    case '2e66851149a36c45367dfd4fac6758f0':
                        $var->sethoraLlamada($division[1]);
                        $var->setFechaLlamada($fecha->format('d-m-Y'));
                        $var->setPais('LATAM');
                        $var->setTag('LLAMADA_LATAM');
                        $gracias='gracias-llamada';
                        break;

                        //Cooking Demo en Ciudad de México
            //    http://lafamiliaperfecta.com/submit-calendry?assigned_to=Grupo%20IESA%20&event_type_uuid=GGCLVKD33YJUSILG&event_type_name=Cooking%20Demo%20en%20Ciudad%20de%20M%C3%A9xico&event_start_time=2020-03-24T11%3A00%3A00-06%3A00&event_end_time=2020-03-24T13%3A00%3A00-06%3A00&invitee_uuid=FEKQWCK64LAODCZT&invitee_full_name=testname&invitee_email=testcooking%40mail.com&answer_1=mensaje
                    case '4b9a904268ebdf3a56427e6be4ca2dca':
                        $var->setEstado('Distrito Federal');
                        $var->setFechaCooking($fecha->format('d-m-Y'));
                        $var->setTag('COOKING_DEMO');
                        $gracias='gracias-cookingdemo';
                        break;

                        //Cita en Showroom Monterrey

            //    http://lafamiliaperfecta.com/submit-calendry?assigned_to=Grupo%20IESA%20&event_type_uuid=BBBIVIE725ORNYSU&event_type_name=Cita%20en%20Showroom%20Monterrey&event_start_time=2020-03-24T13%3A00%3A00-06%3A00&event_end_time=2020-03-24T14%3A00%3A00-06%3A00&invitee_uuid=GELWVDJ64MBTMEN7&invitee_full_name=testName&invitee_email=showroommonterey%40test.com&answer_1=mensaje
                    case '46d27a5799200a80cecd1ede46500390':
                        $var->sethoraShow($division[1]);
                        $var->setEstado('Nuevo León');
                        $var->setFechaShowRoom($fecha->format('d-m-Y'));
                        $var->setTag('SHOWROOM_MONTERREY');
                        $gracias='gracias-Showroom';
                        break;

                        //Cita en Showroom Ciudad de México

            //      http://lafamiliaperfecta.com/submit-calendry?assigned_to=Grupo%20IESA%20&event_type_uuid=FFFMROD36YLETZLP&event_type_name=Cita%20en%20Showroom%20Ciudad%20de%20M%C3%A9xico&event_start_time=2020-03-24T14%3A00%3A00-06%3A00&event_end_time=2020-03-24T15%3A00%3A00-06%3A00&invitee_uuid=BEKQTDOYYLOE75IE&invitee_full_name=testName&invitee_email=showroomcdmx%40mail.com&answer_1=mensaje
                    case '385fba4e0ea6ec77c660f92fe8610fd3':
                        $var->sethoraShow($division[1]);
                        $var->setEstado('Distrito Federal');
                        $var->setFechaShowRoom($fecha->format('d-m-Y'));
                        $var->setTag('SHOWROOM_CDMX');
                        $gracias='gracias-Showroom';
                        break;
                  default:
                      abort(404);
                      break;
              }    
//         dd($var);

        $response=$var->upsert();
        //$code=$response;  
        //dd($response)
        if ($response['success']==true && !empty($response['contactId']) &&$response['message']==null) {
            
            return redirect($gracias);

         }else{
            abort(404);
         }
    }
 
}
