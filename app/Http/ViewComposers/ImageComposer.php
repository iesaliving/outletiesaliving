<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Brand;

class ImageComposer {

	public function compose(View $view)
	{

        $imagen = \DB::table('images')
                    ->whereNotIn('source', ['SHOWROOM','HOME','ABOUTUS','CONTACT','FAQ','SERVICES'])
                    ->orderBy('type')
                    ->get();

        $brands = Brand::select('name','slug','logo','logo_txt')->get();

        $view->with('imagen', $imagen);
        $view->with('brands', $brands);
 
	}
}
