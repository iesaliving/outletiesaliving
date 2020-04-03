<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\{Showroom,ShowroomDetail,Headquarter};

class ShowroomPageComposer {

	public function compose(View $view)
	{

        $showroom   = Showroom::orderBy('id','desc')->first();

        $showdetail = ShowroomDetail::where('showroom_id', $showroom->id)->get();

        $headquarter = Headquarter::get();

        $detail = ShowroomDetail::where('showroom_id',0)->first();
        

        $hero  = \DB::table('images')
                    ->where('source','SHOWROOM')
                    ->WhereIn('type',['HERO','MOBIL'])
                    ->get();

                   
         $slide = \DB::table('images')
                    ->where([
                                 ['source','SHOWROOM'],
                                 ['type','SLIDE']  
                    ])->orderBy('id')->get();


        $view->with('showroom',     $showroom);
        $view->with('showdetail',   $showdetail);
        $view->with('headquarter',  $headquarter);
        $view->with('detail',       $detail);
        $view->with('hero',         $hero);
        $view->with('slide',        $slide);

	}
}
