<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class NoticePrivacyComposer {

	public function compose(View $view)
	{
		
    	$data = \DB::table('notice_privacy')->first();
    	$images  = \DB::table('images')
                    ->where('source','AVISO')->orderBy('type')->get();

		$view->with('data',  $data);
		$view->with('images',   $images);
 
	}
}
