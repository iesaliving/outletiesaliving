<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\{Service,ServiceDetail};

class ServicesComposer {

	public function compose(View $view)
	{
        $service = Service::first();
        $detail  = ServiceDetail::get();
        
        $images  = \DB::table('images')
                    ->where('source','SERVICES')->orderBy('type')->get();

        $view->with('service', $service);
        $view->with('images',  $images);
        $view->with('detail',  $detail);
 
	}
}
