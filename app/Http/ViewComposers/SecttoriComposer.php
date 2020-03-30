<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\{Service,ServiceDetail};

class SecttoriComposer {

	public function compose(View $view)
	{
		
    	$lang=app()->getLocale();

        $governances = Service::join('service_details as sd', 'services.id', '=', 'sd.service_id')
                      ->where([
                            ['services.status', '=', 'GOVERNANCE'],
                            ['sd.lang', '=', $lang],
                        ])
                     ->select('services.*','sd.*')
                     
                     ->get();

        $legales = Service::join('service_details as sd', 'services.id', '=', 'sd.service_id')
                      ->where([
                            ['services.status', '=', 'LEGALE'],
                            ['sd.lang', '=', $lang],
                        ])
                     ->select('services.*','sd.*')
                     
                     ->get();

		$view->with('governances',  $governances);
		$view->with('legales',  $legales);
 
	}
}
