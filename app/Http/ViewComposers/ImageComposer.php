<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class ImageComposer {

	public function compose(View $view)
	{

        $imagen = \DB::table('images')
                    ->whereNotIn('source', ['SHOWROOM','HOME','ABOUTUS','CONTACT','FAQ','SERVICES'])
                    ->orderBy('type')
                    ->get();

        $view->with('imagen',  $imagen);
 
	}
}
