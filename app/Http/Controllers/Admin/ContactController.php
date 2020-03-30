<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

use App\Contact;

class ContactController extends Controller
{
    
    public function index(Request $request)
    {
      abort_unless(\Gate::allows('contact_access'), 403);
      $data = Contact::first();

      $hero = \DB::table('images')
                    ->where('source','CONTACT')->orderBy('id')->get(); 

      return view('admin.contacts.index',compact('data','hero'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(ContactRequest $request)
    {
       abort_unless(\Gate::allows('contact_create'), 403);
       $contact = Contact::create($request->all());

       $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.contacts.index');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {

    }

    
    public function update(ContactRequest $request, $id)
    {
        abort_unless(\Gate::allows('contact_edit'), 403);
        $contact = Contact::find($id);
        $contact->fill($request->all())->save();

           //IMAGE 
        if($request->file('imgInp')){

           $extension =  date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/hero-contacto'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/hero-contacto-mobile'.$extension);

           \DB::table('images')
              ->where('type', 'HERO')
              ->where('source', 'CONTACT')
             ->update(['url'   => "img/" ,'name'  => "hero-contacto".$extension]);

           \DB::table('images')
              ->where('type', 'MOBIL')
              ->where('source', 'CONTACT')
              ->update(['url'   => "img/" ,'name'  => "hero-contacto-mobile".$extension]);

        }

        //IMAGE Mobil
        if($request->file('img_mobil')) {

           $extension = date('YmdHi').'.'.$request->file('img_mobil')->getClientOriginalExtension();

           \Image::make($request->file('img_mobil'))->resize(375, 345)->save('img/hero-contacto-mobile'.$extension);

           \DB::table('images')
              ->where('id', $request->input('idmobil'))
              ->update(['url'   => "img/" ,'name'  => "hero-contacto-mobile".$extension]);

        }

         $notification = array(
            'message' => trans('global.registration_updated') , 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.contacts.index');
    }

    public function destroy($id)
    {
        //
    }
}
