<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class FooterComposer {

	public function compose(View $view)
	{
		
    	$contact = \DB::table('contacts')->first();
    	$images  = \DB::table('images')
                    ->where('source','CONTACT')->orderBy('type')->get();

		$view->with('contact',  $contact);
		$view->with('images',   $images);
 
	}
}
