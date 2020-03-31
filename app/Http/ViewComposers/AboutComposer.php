<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class AboutComposer {

	public function compose(View $view)
	{
		
    	 $about_us = \DB::table('about_us')->first();

         $images   = \DB::table('images')
                    ->where([
                                 ['source','ABOUTUS'],
                                 ['type', '<>','SLIDE']  
                    ])->orderBy('id')->get();


        $view->with('about_us',  $about_us);
        $view->with('images',    $images);
       
	}
}
