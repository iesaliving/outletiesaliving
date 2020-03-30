<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\{HomePage,Testimony,Showroom};

class HomeComposer {

	public function compose(View $view)
	{

		$home   = HomePage::where('active',1)->orderBy('id')->get();

        $images = \DB::table('images')
                    ->where('source','HOME')->orderBy('type')->get();

        $logos = \DB::table('brands')
                    ->where('active',1)
                    ->whereNotIn('slug',['cocina-exterior'])
                    ->select('slug','logo')
                    ->orderBy('id')->get();

        $testimonies = Testimony::select('image','name','text')->orderBy('id')->get();

        $view->with('home',  $home);
        $view->with('images',  $images);
        $view->with('testimonies',  $testimonies);
        $view->with('logos',  $logos);
 
	}
}
