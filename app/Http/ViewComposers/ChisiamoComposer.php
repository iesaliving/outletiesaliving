<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\{Partner,Partnerdetail};

class ChisiamoComposer {

	public function compose(View $view)
	{

		$lang=app()->getLocale();
		
    	$partners =   Partner::join('partner_details as pd', 'partners.id', '=', 'pd.partner_id')
                      ->where([
                            ['partners.status', '=', 'PARTNER'],
                            ['pd.lang', '=', $lang],
                        ])
                     ->select('partners.*','pd.excerpt','pd.lang')
                     //->limit(6)
                     ->get();

        $associates =  Partner::join('partner_details as pd', 'partners.id', '=', 'pd.partner_id')
                      ->where([
                            ['partners.status', '=', 'ASSOCCIATE'],
                            ['pd.lang', '=', $lang],
                        ])
                     ->select('partners.*','pd.excerpt','pd.lang')
                     //->limit(6)
                     ->get();

        $counseles =  Partner::join('partner_details as pd', 'partners.id', '=', 'pd.partner_id')
                      ->where([
                            ['partners.status', '=', 'OF COUNSEL'],
                            ['pd.lang', '=', $lang],
                        ])
                     ->select('partners.*','pd.excerpt','pd.lang')
                    // ->limit(6)
                     ->get();

        $view->with('partners',  $partners);
        $view->with('associates',  $associates);
        $view->with('counseles',  $counseles);
 
	}
}
