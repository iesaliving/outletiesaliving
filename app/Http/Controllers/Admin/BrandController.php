<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\BrandRequest;
use Yajra\DataTables\Facades\DataTables;

use App\{Brand,BrandDetail,Hero};

class BrandController extends Controller
{
   public function index()
    {
        return view('admin.brands.index');
    }

   
    public function create()
    {
        return view('admin.brands.form');
    }

  
    public function store(BrandRequest $request)
    {
        
        $brands = new Brand;
        $brands->slug = Str::slug($request->input('name'), '-');
        $brands->fill($request->all());
        $brands->save();

        $path = public_path("img/".$brands->slug);

            if(!\File::isDirectory($path)){
                \File::makeDirectory($path, 666, true, true);
             }

         $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.brand.edit', $brands->id);
    }

   
    public function show($id)
    {
        $data = Brand::findOrFail($id);

        return view('admin.brands.show', compact('data'));
    }

    
    public function edit($id)
    {
        $data   = Brand::findOrFail($id);

        $hero = \DB::table('images')
                    ->where('source',$data->slug)->orderBy('id')->get();  

        return view('admin.brands.form', compact('data','hero'));
    }

   
    public function update(BrandRequest $request, $id)
    {
        try {

           // dd($request->all());
        
        $brand = Brand::findOrFail($id);
        $brand->fill($request->all());
        $brand->save();

        $path = public_path("img/".$brand->slug);

        if(!\File::isDirectory($path)){
            \File::makeDirectory($path, 666, true, true);
        }
                 
            //IMAGE 
        if($request->file('imglogo')){

            $extension = date('YmdHi').'.'.$request->file('imglogo')->getClientOriginalExtension();

           \Image::make($request->file('imglogo'))->resize(262, 102)->save('img/'.$brand->slug.'/logo'.$extension);

            $bra = Brand::findOrFail($id);
            $bra->logo = 'img/'.$brand->slug.'/logo'.$extension;
            $bra->save();

        }

        
         if($request->file('imgsoc')){

            $extension = date('YmdHi').'.'.$request->file('imgsoc')->getClientOriginalExtension();

           \Image::make($request->file('imgsoc'))->resize(1920, 400)->save('img/'.$brand->slug.'/facebook-'.$extension);

            $bra = Brand::findOrFail($id);
            $bra->social_img = 'img/'.$brand->slug.'/facebook-'.$extension;
            $bra->save();

        }


           //IMAGE 
        if($request->file('imgInp')){

          $extension = date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/'.$brand->slug.'/hero'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/'.$brand->slug.'/mobile'.$extension);

            \DB::table('images')
              ->where('type', 'HERO')
              ->where('source', $brand->slug)
             ->update(['url'   => 'img/'.$brand->slug.'/' ,'name'  => "hero".$extension]);

           \DB::table('images')
              ->where('type', 'MOBIL')
              ->where('source', $brand->slug)
              ->update(['url'   => 'img/'.$brand->slug.'/' ,'name'  => "mobile".$extension]);

        }

         //IMAGE Mobil
        if($request->file('img_mobil')) {

           $extension = date('YmdHi').'.'.$request->file('img_mobil')->getClientOriginalExtension();

           \Image::make($request->file('img_mobil'))->resize(375, 345)->save('img/'.$brand->slug.'/mobile'.$extension);

           \DB::table('images')
              ->where('id', $request->input('idmobil'))
              ->update(['url'   => 'img/'.$brand->slug.'/' ,'name'  => "mobile".$extension]);
        }


        /*********Detalle**********/

        if (isset($request->idbd)) {
            
           foreach($request->idbd as $key => $value) {

            $bdtail = BrandDetail::findOrFail($request->idbd[$key]);
            $bdtail->title       = $request->title_d[$key];
            $bdtail->description = $request->description_d[$key]; 
            $bdtail->features    = $request->feat[$key];
            $bdtail->update();
            
                if(isset($request->file('imgs')[$key])){

                    $extension = date('YmdHi').'.'.$request->file('imgs')[$key]->getClientOriginalExtension();

                    \Image::make($request->file('imgs')[$key])
                                                        ->save('img/'.$brand->slug.'/'.$request->idbd[$key].'-'.$extension);

                    $bdt = BrandDetail::findOrFail($request->idbd[$key]);
                    $bdt->image = 'img/'.$brand->slug.'/'.$request->idbd[$key].'-'.$extension;
                    $bdt->save();

                }
            }

        }

        } catch (Exception $e) {
            $notification = array(
            'message'    => 'Error!', 
            'alert_type' => 'error',);
        
            \Session::flash('notification', $notification);
        }

         $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.brand.edit', $brand->id);
    }

    
    public function destroy($id)
    {
        // Brand::findOrFail($id)->delete();
        //return response(null, 204);
    }

    public function table(Request $request)
    {
        $query = Brand::query();

        return Datatables::of($query)->addColumn('action', function ($dat) {

            return ' <a href="'.route("admin.brand.show", $dat->id).'" class="btn btn-sm btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="right" title="Ver: '.$dat->name.'"></i></a>

                <a href="'.route("admin.brand.edit", $dat->id).'" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar: '.$dat->name.'"></i></a>
               ';
        })
        ->addColumn('logo', function ($dat) {

              $logo =  "<img class='img-fluid w-25' src='".asset($dat->logo)."'>";
            return $logo;
        })
        ->rawColumns(['action','logo'])
        ->make(true);
    }
}
