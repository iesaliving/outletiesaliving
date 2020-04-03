<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;

use Yajra\DataTables\Facades\DataTables;

use App\{Faq,Hero};



class FaqController extends Controller
{
     public function index()
    {
        return view('admin.faqs.index');
    }

   
    public function create()
    {
        return view('admin.faqs.form');
    }

    
    public function store(FaqRequest $request)
    {
        $data = new Faq;
        $data->fill($request->all());
        $data->slug  = Str::slug($request->input('title'), '-');
        $data->save();

        $path = public_path("img/faq/");

            if(!\File::isDirectory($path)){

              \File::makeDirectory($path, 666, true, true);

            }

          //IMAGE 
        if($request->file('imgInp')){

            $extension = date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/faq/hero'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/faq/mobile'.$extension);

              $img = new Hero;
              $img->type     = "HERO";
              $img->source   = "FAQ";
              $img->url      = "img/faq/";
              $img->name     = "hero".$extension;
              $img->save();

              $img = new Hero;
              $img->type     = "MOBIL";
              $img->source   = "FAQ";
              $img->url      = "img/faq/";
              $img->name     = "mobile".$extension;
              $img->save();

        }


          //IMAGE logo
        if($request->file('logo')){

            $extension = date('YmdHi').'.'.$request->file('logo')->getClientOriginalExtension();

           \Image::make($request->file('logo'))->save('img/faq/'.$data->slug.'-'.$extension);

              $imgl = Faq::findOrFail($data->id);
              $imgl->image     = 'img/faq/'.$data->slug.'-'.$extension;
              $imgl->update();

        }

       
         $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.faq.edit', $data->id);
    }

   
    public function show($id)
    {
        $data = Faq::findOrFail($id);

        return view('admin.faqs.show', compact('data'));
    }

    
    public function edit($id)
    {
        $data  = Faq::findOrFail($id);

        $hero = \DB::table('images')
                    ->where('source','FAQ')->orderBy('id')->get(); 

        return view('admin.faqs.form', compact('data','hero'));
    }

   
    public function update(FaqRequest $request, $id)
    {
        $data = Faq::findOrFail($id);
        $data->fill($request->all())->save();

           //IMAGE 
        if($request->file('imgInp')){


           $extension = date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/faq/hero'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/faq/mobile'.$extension);

            \DB::table('images')
              ->where('type', 'HERO')
              ->where('source', 'FAQ')
             ->update(['url'   => "img/faq/" ,'name'  => "hero".$extension]);

           \DB::table('images')
              ->where('type', 'MOBIL')
              ->where('source', 'FAQ')
              ->update(['url'   => "img/faq/" ,'name'  => "mobile".$extension]);

        }

        //IMAGE Mobil
        if($request->file('img_mobil')) {

           $extension =  date('YmdHi').'.'.$request->file('img_mobil')->getClientOriginalExtension();

           \Image::make($request->file('img_mobil'))->resize(375, 345)->save('img/faq/mobile'.$extension);

           \DB::table('images')
              ->where('id', $request->input('idmobil'))
              ->update(['url'   => "img/faq/" ,'name'  => "mobile".$extension]);

        }


           //IMAGE logo
        if($request->file('logo')){

            $extension =  date('YmdHi').'.'.$request->file('logo')->getClientOriginalExtension();

           \Image::make($request->file('logo'))->save('img/faq/'.$data->slug.'-'.$extension);

              $imgl = Faq::findOrFail($data->id);
              $imgl->image     = 'img/faq/'.$data->slug.'-'.$extension;
              $imgl->update();

        }

        $notification = array(
            'message' => trans('global.registration_updated') , 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.faq.edit', $id);
    }

    
    public function destroy($id)
    {
        $data = Faq::findOrFail($id)->delete();
        return response(null, 204);
    }

    public function table(Request $request)
    {
        $query = Faq::query();

        return Datatables::of($query)->addColumn('action', function ($dat) {

            return ' <a href="'.route("admin.faq.show", $dat->id).'" class="btn btn-sm btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="right" title="Show: '.$dat->title.'"></i></a>

                <a href="'.route("admin.faq.edit",$dat->id).'" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Edit: '.$dat->title.'"></i></a>
                <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="delete '.$dat->title.'" data-remote="'.route("admin.faq.destroy", $dat->id).'"><i class="fa fa-trash-o"></i></button> ';
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
