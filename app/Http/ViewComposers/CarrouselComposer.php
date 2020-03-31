<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class CarrouselComposer {

	public function compose(View $view)
	{
		
         $logos    = \DB::table('images')
                    ->where([
                                 ['source','ABOUTUS'],
                                 ['type','SLIDE']  
                    ])->orderBy('id')->get();

        $view->with('logos',    $logos);
 
	}
}
