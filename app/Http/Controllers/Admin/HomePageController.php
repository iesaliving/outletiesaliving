<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\HomeRequest;

use \App\HamePage;
use App\Hero;

class HomePageController extends Controller
{
    
    public function index()
    {
        $data = \App\HomePage::where('active',1)->orderBy('id')->get();
        $hero = \DB::table('images')
                    ->where('source','HOME')->orderBy('id')->get();
       
        return view('admin.home.index', compact('data','hero'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(HomeRequest $request)
    {
                
        foreach($request->id as $key => $value) { 

            $url="";

             if(isset($request->file('img')[$key])){

                $path = public_path("img/home/");

                    if(!\File::isDirectory($path)){

                        \File::makeDirectory($path, 666, true, true);

                    }
                    
                $extension =  date('YmdHi').'.'.$request->file('img')[$key]->getClientOriginalExtension();

                \Image::make($request->file('img')[$key])->resize(650, 590)->save('img/home/'.$request->id[$key].$extension);
                    $url = "img/home/".$request->id[$key].$extension;

                   $homei = \App\HomePage::findOrFail($request->id[$key]); 
                   $homei->image  = $url;
                   $homei->save(); 
                 
               }

              $home = \App\HomePage::findOrFail($request->id[$key]); 
              $home->title  = $request->title[$key];
              $home->text   = $request->text[$key]; 
              $home->save(); 

        }

           //IMAGE 
        if($request->hasFile('imgInp')){

           $extension =  date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/home/hero'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/home/mobile'.$extension);

           Hero::where([
                  ['type', '=', 'HERO'],
                  ['source', '=', 'HOME'],
              ])
              ->update(['url'   => "img/home/" ,'name'  => "hero".$extension]);

               Hero::where([
                  ['type', '=', 'MOBIL'],
                  ['source', '=', 'HOME'],
              ])
              ->update(['url'   => "img/home/" ,'name'  => "mobile".$extension]);


        }

        //IMAGE Mobil
        if($request->file('img_mobil')) {

           $extension =  date('YmdHi').'.'.$request->file('img_mobil')->getClientOriginalExtension();

           \Image::make($request->file('img_mobil'))->resize(375, 345)->save('img/home/mobile'.$extension);

           \DB::table('images')
              ->where('id', $request->input('idmobil'))
              ->update(['url'   => "img/home/" ,'name'  => "mobile".$extension]);

        }

         $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.home_page.index');

    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        
    
    }

   
    public function destroy($id)
    {
        //
    }
}
