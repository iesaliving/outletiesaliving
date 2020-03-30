<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ShowroomRequest;
use Illuminate\Support\Facades\Storage;


Use App\{Hero,Showroom,ShowroomDetail,Headquarter};

class ShowroomController extends Controller
{
    public function index()
    {
        return view('admin.showrooms.index');
    }

   
    public function create()
    {
        return view('admin.showrooms.form');
    }

  
    public function store(ShowroomRequest $request)
    {
        
        $showroom = new Showroom;
        $showroom->fill($request->all());
        $showroom->save();

        if (isset($request->title_d)) {
            foreach($request->title_d as $key => $value) {

               $showdetail = new ShowroomDetail;
               $showdetail->showroom_id = $showroom->id;
               $showdetail->title       = $request->input('title_d.'.$key);
               $showdetail->description = $request->input('description_d.'.$key);
               $showdetail->save();

               if(isset($request->file('img')[$key])){

                $path = public_path("img/showrooms/");

                    if(!\File::isDirectory($path)){

                        \File::makeDirectory($path, 666, true, true);

                    }

                  $extension =  date('YmdHi').'.'.$request->file('img')[$key]->getClientOriginalExtension();

                \Image::make($request->file('img')[$key])->resize(407, 300)->save($path.$showdetail->id.$extension);
                     $url = "img/showrooms/".$request->id[$key].$extension;

                   $homei = ShowroomDetail::findOrFail($showdetail->id); 
                   $homei->image  = $url;
                   $homei->save(); 
                 
               }
              

            }

        }


         $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.showroom.edit', $showroom->id);
    }

   
    public function show($id)
    {
        $data = Showroom::findOrFail($id);

        return view('admin.showrooms.show', compact('data'));
    }

    
    public function edit($id)
    {
        $data = Showroom::findOrFail($id);

        return view('admin.showrooms.form', compact('data'));
    }

   
    public function update(ShowroomRequest $request, $id)
    {


        $showroom = Showroom::findOrFail($id);
        $showroom->fill($request->all());
        $showroom->save();

         // //IMAGE 

        if (isset($request->title_d)) {

           
            foreach($request->title_d as $key => $value) {
                   
               $showdetail = ShowroomDetail::findOrFail($request->id[$key]);
               $showdetail->showroom_id = $id;
               $showdetail->title       = $request->title_d[$key];
               $showdetail->description = $request->description_d[$key];
               $showdetail->update();
               
               if(isset($request->file('img')[$key])){

                $path = public_path("img/showrooms/");

                    if(!\File::isDirectory($path)){

                        \File::makeDirectory($path, 666, true, true);

                    }

                   $extension =  date('YmdHi').'.'.$request->file('img')[$key]->getClientOriginalExtension();

                   \Image::make($request->file('img')[$key])->resize(407, 300)->save("img/showrooms/".$request->id[$key].$extension);
                     $url = "img/showrooms/".$request->id[$key].$extension;

                   $homei = ShowroomDetail::findOrFail($request->id[$key]); 
                   $homei->image  = $url;
                   $homei->save(); 
                 
               }
              
            }

            ShowroomDetail::where('showroom_id', $id)->whereNotIn('id', $request->input('id'))->delete();
        }


         $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.showroom.edit', $showroom->id);
    }

    
    public function destroy($id)
    {
        // Showroom::findOrFail($id)->delete();
        // return response(null, 204);
    }

    public function table(Request $request)
    {
        $query = Showroom::query();

        return Datatables::of($query)->addColumn('action', function ($dat) {

            return ' <a href="'.route("admin.showroom.show", $dat->id).'" class="btn btn-sm btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="right" title="Ver: '.$dat->name.'"></i></a>

                <a href="'.route("admin.showroom.edit", $dat->id).'" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar: '.$dat->name.'"></i></a>
               ';
        })
        ->addColumn('tipo', function ($dat) {

                $tipo = $dat->id == 1 ? 'Footer' : 'Pagina Showroom';
            return $tipo;
        })
        ->rawColumns(['action','tipo'])
        ->make(true);
    }

    public function showroom_page(Request $request)
    {
        $headquarter = Headquarter::get();
        $detail = ShowroomDetail::where('showroom_id',0)->first();

        $hero = \DB::table('images')
                    ->where('source','SHOWROOM')->orderBy('id')->get();

        $slide = \DB::table('images')
                    ->where([
                                 ['source','SHOWROOM'],
                                 ['type','SLIDE']  
                    ])->orderBy('id')->get();

        return view('admin.showrooms.page',compact('headquarter','detail','hero','slide'));

    }

    public function showroom(Request $request)
    {

           //IMAGE 
        if($request->file('imgInp')){

             $extension =  date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/showrooms/hero'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/showrooms/mobile'.$extension);

            Hero::where([
                  ['type', '=', 'HERO'],
                  ['source', '=', 'SHOWROOM'],
              ])
              ->update(['url'   => "img/showrooms/" ,'name'  => "hero".$extension]);

               Hero::where([
                  ['type', '=', 'MOBIL'],
                  ['source', '=', 'SHOWROOM'],
              ])
              ->update(['url'   => "img/showrooms/" ,'name'  => "mobile".$extension]);

        }

         //IMAGE Mobil
        if($request->file('img_mobil')) {

           $extension = date('YmdHi').'.'.$request->file('img_mobil')->getClientOriginalExtension();

           \Image::make($request->file('img_mobil'))->resize(375, 345)->save('img/showrooms/mobile'.$extension);

           \DB::table('images')
              ->where('id', $request->input('idmobil'))
               ->update(['url'   => "img/showrooms/" ,'name'  => "mobile".$extension]);

        }

                  
        foreach($request->idh as $key => $value) {
           
            $quarter = Headquarter::findOrFail($request->idh[$key]);
            $quarter->name      = $request->name[$key];
            $quarter->address   = $request->address[$key];
            $quarter->phone     = $request->phone[$key];
            $quarter->email     = $request->email[$key]; 
            $quarter->schedule  = implode("#",$request->input('schedule'.$key)); 
            $quarter->update();

        }
         /***COOKING DEMO***/
         $detail = ShowroomDetail::findOrFail($request->input('id'));
         $detail->fill($request->all());
         $detail->update();


         if($request->file('demo')){

            
            $this->validate($request, [
                'demo' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=789 ,height=551',
            ]);

             $extension = date('YmdHi').'.'.$request->file('demo')->getClientOriginalExtension();
            
            \Image::make($request->file('demo'))->resize(789, 551)->save('img/showrooms/demo'.$extension);

            $detail = ShowroomDetail::findOrFail($request->input('id'));
            $detail->image = 'img/showrooms/demo'.$extension;
            $detail->update();

         }


         /*** FIN COOKING DEMO***/


         /***SLIDE***/

         

         if (isset($request->id_slide)){

                Hero::where([
                             ['source','SHOWROOM'],
                             ['type','SLIDE']  
                    ])
                   ->whereNotIn('id', $request->input('id_slide'))
                   ->delete();

            } else {

                Hero::where([
                             ['source','SHOWROOM'],
                             ['type','SLIDE']  
                    ])
                   ->delete();

            }

         if($request->slide) {

            foreach($request->slide as $key => $value) {

                if($request->file('slide')[$key]){

                    $this->validate($request, [
                        'slide.*' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=1132 ,height=600',
                    ]);
        
                    
                    if (isset($request->id_slide[$key])){

                      $extension = date('YmdHi').'.'.$request->file('slide')[$key]->getClientOriginalExtension();

                         \Image::make($request->file('slide')[$key])->resize(1132, 600)->save('img/showrooms/carrusel_'.$request->id_slide[$key].$extension);
                          
                           $hero = Hero::findOrFail($request->id_slide[$key]);
                           $hero->url   = "img/showrooms/";
                           $hero->name  = 'carrusel_'.$request->id_slide[$key].$extension;
                           $hero->update();
                       
                    }
                    else{

                        $hero = new Hero;
                        $hero->type    = "SLIDE";
                        $hero->source  = "SHOWROOM";
                        $hero->url     = "img/showrooms/";
                        $hero->save();

                         $extension = date('YmdHi').'.'.$request->file('slide')[$key]->getClientOriginalExtension();

                         \Image::make($request->file('slide')[$key])->resize(1132, 600)->save('img/showrooms/carrusel_'.$hero->id.$extension);

                           $herou = Hero::findOrFail($hero->id);
                           $herou->url   = "img/showrooms/";
                           $herou->name  = 'carrusel_'.$hero->id.$extension;
                           $herou->update();

                    }
                }

            }


        }

        $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.showroom.page');

    }
}
