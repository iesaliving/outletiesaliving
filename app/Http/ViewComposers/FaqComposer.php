<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Faq;

class FaqComposer {

	public function compose(View $view)
	{	
        $faqs = \DB::table('faqs')->orderBy('id')->get();

        $hero = \DB::table('images')->where('source','FAQ')->orderBy('id')->first();

		$view->with('faqs',  $faqs);
		$view->with('hero', $hero);
 
	}
}
