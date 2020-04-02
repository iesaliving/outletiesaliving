<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequest;

use App\{Service,ServiceDetail,Hero};


class ServiceController extends Controller
{
    
    public function index()
    {
        $data   = Service::first();
        $detail = ServiceDetail::get();

        $hero = \DB::table('images')
                    ->where('source','SERVICES')->orderBy('id')->get();

        return view('admin.services.index', compact('data','detail','hero'));
    }

   
    public function create()
    {

    }

    
    public function store(ServicesRequest $request)
    {
        $data = new Service;
        $data->fill($request->all());
        $data->save();

        if($request->file('img_st')){

            $extension = date('YmdHi').'.'.$request->file('img_st')->getClientOriginalExtension();

            \Image::make($request->file('img_st'))->resize(650, 490)->save('img/servicios/servicio'.$extension);

            Service::where('id', $data->id)
                        ->update(['imag_st' => 'img/servicios/servicio'.$extension]);
        }

         if($request->file('imag_cs')){

            $extension = date('YmdHi').'.'.$request->file('imag_cs')->getClientOriginalExtension();

            \Image::make($request->file('imag_cs'))->resize(650, 490)->save('img/servicios/agenda'.$extension);

            Service::where('id', $data->id)
                        ->update(['imag_cs' => 'img/servicios/agenda'.$extension]);
        }


          //IMAGE 
        if($request->file('imgInp')){

            $extension = date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/servicios/hero'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/servicios/mobile'.$extension);

              $img = new Hero;
              $img->type     = "HERO";
              $img->source   = "SERVICES";
              $img->url      = "img/servicios/";
              $img->name     = "hero".$extension;
              $img->save();

              $img = new Hero;
              $img->type     = "MOBIL";
              $img->source   = "SERVICES";
              $img->url      = "img/servicios/";
              $img->name     = "mobile".$extension;
              $img->save();

        }

         //IMAGE Mobil
        if($request->file('img_mobil')){

           $extension = date('YmdHi').'.'.$request->file('img_mobil')->getClientOriginalExtension();

           \Image::make($request->file('img_mobil'))->resize(375, 345)->save('img/servicios/mobile'.$extension);

           \DB::table('images')
              ->where('type', 'MOBIL')
              ->where('source', 'SERVICES')
              ->update(['url'   => "img/servicios/" ,'name'  => "mobile".$extension]);

        }

         $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.services.index');
    }

   
    public function show($id)
    {
    
    }

    
    public function edit($id)
    {
        
    }

   
    public function update(ServicesRequest $request, $id)
    {
        
        $service= Service::findOrFail($id);
        $service->fill($request->all());
        $service->save();

        if($request->file('img_st')){

           $extension = date('YmdHi').'.'.$request->file('img_st')->getClientOriginalExtension();

            \Image::make($request->file('img_st'))->resize(650, 490)->save('img/servicios/servicio'.$extension);

            Service::where('id', $service->id)
                        ->update(['imag_st' => 'img/servicios/servicio'.$extension]);
        }

         if($request->file('imag_cs')){

           $extension = date('YmdHi').'.'.$request->file('imag_cs')->getClientOriginalExtension();

            \Image::make($request->file('imag_cs'))->resize(650, 490)->save('img/servicios/agenda'.$extension);

            Service::where('id', $service->id)
                        ->update(['imag_cs' => 'img/servicios/agenda'.$extension]);
        }


        if(isset($request->id)){

            foreach($request->id as $key => $value) {

                ServiceDetail::where('id', $request->id[$key])
                        ->update(['title' => $request->input('title_d.'.$key),
                                  'description' => $request->input('description_d.'.$key)
                        ]);

                
                if(isset($request->file('img')[$key])){

                    $extension = date('YmdHi').'.'.$request->file('img')[$key]->getClientOriginalExtension();

                    \Image::make($request->file('img')[$key])->resize(650, 490)->save('img/servicios/'.$request->id[$key].'-'.$extension);

                    ServiceDetail::where('id', $request->id[$key])
                               ->update(['image' => 'img/servicios/'.$request->id[$key].'-'.$extension]);

                }



            }

        }

        //IMAGE 
        if($request->file('imgInp')){

            $extension = date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/servicios/hero'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/servicios/mobile'.$extension); 

           \DB::table('images')->where([
                  ['type', '=', 'HERO'],
                  ['source', '=', 'SERVICES'],
              ])
              ->update(['url'   => "img/servicios/" ,'name'  => "hero".$extension]);

            \DB::table('images')
              ->where('id', $request->input('idmobil'))
              ->update(['url'   => "img/servicios/" ,'name'  => "mobile".$extension]);

        }

        //IMAGE Mobil
        if($request->file('img_mobil')) {

           $extension = date('YmdHi').'.'.$request->file('img_mobil')->getClientOriginalExtension();

           \Image::make($request->file('img_mobil'))->resize(375, 345)->save('img/servicios/mobile'.$extension);

           \DB::table('images')
              ->where('id', $request->input('idmobil'))
              ->update(['url'   => "img/servicios/" ,'name'  => "mobile".$extension]);

        }
        // DETALLE


        $notification = array(
            'message' => trans('global.registration_updated') , 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.services.index');
    }

    
    public function destroy($id)
    {
       
    }

   
}