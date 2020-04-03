<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AboutUsRequest;

use App\AboutUs;
use App\Hero;

class AboutUsController extends Controller
{
    
    public function index()
    {
       $data = AboutUs::first();
       $hero = \DB::table('images')
                    ->where('source','ABOUTUS')->orderBy('id')->get();  

      $slide = \DB::table('images')
                    ->where([
                                 ['source','ABOUTUS'],
                                 ['type','SLIDE']  
                    ])->orderBy('id')->get();

       return view('admin.about_us.index',compact('data','hero','slide'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(AboutUsRequest $request)
    {
        
        $about = AboutUs::create($request->all());

           //IMAGE 
        if($request->file('imgInp')){

           $extension =  date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/nosotros/hero'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/nosotros/mobile'.$extension);
        }

        if($request->file('imgObj')){

            $extension =  date('YmdHi').'.'.$request->file('imgObj')->getClientOriginalExtension();

           \Image::make($request->file('imgObj'))->save('img/nosotros/hero.jpg');
        }

         $notification = array(
            'message' => trans('global.registration_updated') , 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.about_us.index');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(AboutUsRequest $request, $id)
    {
        $about = AboutUs::find($id);
        $about->fill($request->all())->save();


          //IMAGE objetivo

        if($request->file('imgObj')) {

           $extension = date('YmdHi').'.'.$request->file('imgObj')->getClientOriginalExtension();

           \Image::make($request->file('imgObj'))->save('img/nosotros/obj'.$extension);

            $about_obj = AboutUs::find($id);
            $about_obj->imag_obj = 'img/nosotros/obj'.$extension;
            $about_obj->save();

        }

           //IMAGE 
        if($request->file('imgInp')){

             $extension =  date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/nosotros/hero'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/nosotros/mobile'.$extension);

           \DB::table('images')
              ->where('type', 'HERO')
              ->where('source', 'ABOUTUS')
              ->update(['url'   => "img/nosotros/" ,'name'  => "hero".$extension]);

           \DB::table('images')
              ->where('type', 'MOBIL')
              ->where('source', 'ABOUTUS')
               ->update(['url'   => "img/nosotros/" ,'name'  => "mobile".$extension]);
        }

       

         //IMAGE Mobil
        if($request->file('img_mobil')) {

           $extension = date('YmdHi').'.'.$request->file('img_mobil')->getClientOriginalExtension();

           \Image::make($request->file('img_mobil'))->resize(375, 345)->save('img/nosotros/mobile'.$extension);

           \DB::table('images')
              ->where('id', $request->input('idmobil'))
             ->update(['url'   => "img/nosotros/" ,'name'  => "mobile".$extension]);

        }

         if($request->slide) {

            foreach($request->slide as $key => $value) {

                if($request->file('slide')[$key]){
                     

                    if (isset($request->id_slide[$key])){

                        $extension = date('YmdHi').'.'.$request->file('slide')[$key]->getClientOriginalExtension();

                         \Image::make($request->file('slide')[$key])->save('img/nosotros/carrusel_'.$request->id_slide[$key].$extension);
                          
                           $hero = Hero::findOrFail($request->id_slide[$key]);
                           $hero->url   = "img/nosotros/";
                           $hero->name  = 'carrusel_'.$request->id_slide[$key].$extension;
                           $hero->update();
                       
                    }
                    else{

                        $hero = new Hero;
                        $hero->type    = "SLIDE";
                        $hero->source  = "ABOUTUS";
                        $hero->url     = "img/nosotros/";
                        $hero->save();

                         $extension = date('YmdHi').'.'.$request->file('slide')[$key]->getClientOriginalExtension();

                         \Image::make($request->file('slide')[$key])->save('img/nosotros/carrusel_'.$hero->id.$extension);

                           $herou = Hero::findOrFail($hero->id);
                           $herou->url   = "img/nosotros/";
                           $herou->name  = 'carrusel_'.$hero->id.$extension;
                           $herou->update();

                    }
                }

            }


        }


         $notification = array(
            'message' => trans('global.registration_updated') , 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.about_us.index');
    }

   
    public function destroy($id)
    {
        //
    }
}
