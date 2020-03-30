<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NoticePrivacy;
use Illuminate\Http\Request;
use App\Http\Requests\NoticePrivacyRequest;

class NoticePrivacyController extends Controller
{
    public function index(Request $request)
    {
      abort_unless(\Gate::allows('contact_access'), 403);
      $data = NoticePrivacy::first();
      $hero = \DB::table('images')
                    ->where('source','AVISO')->orderBy('id')->get();

      return view('admin.notice_privacy.index',compact('data','hero'));
    }

    public function create()
    {
        //
    }

    
    public function store(NoticePrivacyRequest $request)
    {
        //
    }

   
    public function show(NoticePrivacy $noticePrivacy)
    {
        //
    }

  
    public function edit(NoticePrivacy $noticePrivacy)
    {
        //
    }

    public function update(NoticePrivacyRequest $request, $id)
    {
        $not = NoticePrivacy::find($id);
        $not->fill($request->all())->save();

           //IMAGE 
        if($request->file('imgInp')){

          $extension =  date('YmdHi').'.'.$request->file('imgInp')->getClientOriginalExtension();

           \Image::make($request->file('imgInp'))->save('img/hero-aviso'.$extension);
           \Image::make($request->file('imgInp'))->resize(375, 345)->save('img/hero-aviso-mobile'.$extension);

           \DB::table('images')
              ->where('type', 'HERO')
              ->where('source', 'AVISO')
             ->update(['url'   => "img/" ,'name'  => "hero-aviso".$extension]);

           \DB::table('images')
              ->where('type', 'MOBIL')
              ->where('source', 'AVISO')
              ->update(['url'   => "img/" ,'name'  => "hero-aviso-mobile".$extension]);

        }

         //IMAGE Mobil
        if($request->file('img_mobil')) {

           $extension = date('YmdHi').'.'.$request->file('img_mobil')->getClientOriginalExtension();

           \Image::make($request->file('img_mobil'))->resize(375, 345)->save('img/hero-aviso-mobile'.$extension);

           \DB::table('images')
              ->where('id', $request->input('idmobil'))
               ->update(['url'   => "img/" ,'name'  => "hero-aviso-mobile".$extension]);

        }

         $notification = array(
            'message' => trans('global.registration_updated') , 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.notice_privacy.index');
    }

    public function destroy(NoticePrivacy $noticePrivacy)
    {
        //
    }
}
