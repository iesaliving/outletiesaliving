<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\TestimonyRequest;

Use App\Testimony;

class TestimonyController extends Controller
{
   
    public function index()
    {
        
        return view('admin.testimonies.index');
    }

   
    public function create()
    {
        return view('admin.testimonies.form');
    }

  
    public function store(TestimonyRequest $request)
    {
        
        $testimony = new Testimony;
        $testimony->fill($request->all());
        $testimony->save();

         if($request->file('imgInp')){

            $path = public_path("img/testimonies/");

                    if(!\File::isDirectory($path)){

                        \File::makeDirectory($path, 666, true, true);

                    }

           $extension = date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/testimonies/'.$testimony->id.'-'. $extension);

            $testimony = Testimony::findOrFail($testimony->id);
            $testimony->image = "img/testimonies/".$testimony->id."-". $extension;
            $testimony->save();
        }


         $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.testimonies.edit', $testimony->id);
    }

   
    public function show($id)
    {
        $data = Testimony::findOrFail($id);

        return view('admin.testimonies.show', compact('data'));
    }

    
    public function edit($id)
    {
        $data = Testimony::findOrFail($id);

        return view('admin.testimonies.form', compact('data'));
    }

   
    public function update(TestimonyRequest $request, $id)
    {
        
         if($request->file('imgInp')){

            $extension = date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

            \Image::make($request->file('imgInp'))->save('img/testimonies/'.$id.'-'. $extension);

            $testimony = Testimony::findOrFail($id);
            $testimony->image = 'img/testimonies/'.$id.'-'. $extension;
            $testimony->save();
        }

        $testimony = Testimony::findOrFail($id);
        $testimony->fill($request->all());
        $testimony->save();

         $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.testimonies.edit', $testimony->id);
    }

    
    public function destroy($id)
    {
        Testimony::findOrFail($id)->delete();
        return response(null, 204);
    }

    public function table(Request $request)
    {
        $query = \DB::table('testimonies');

        return Datatables::queryBuilder($query)->addColumn('action', function ($dat) {

            return ' <a href="'.route("admin.testimonies.show", $dat->id).'" class="btn btn-sm btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="right" title="Ver: '.$dat->name.'"></i></a>

                <a href="'.route("admin.testimonies.edit", $dat->id).'" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar: '.$dat->name.'"></i></a>
                <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar '.$dat->name.'" data-remote="'.route("admin.testimonies.destroy", $dat->id).'"><i class="fa fa-trash-o"></i></button> ';
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
