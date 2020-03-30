<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\{Showroom,ShowroomDetail};

class ShowroomComposer {

	public function compose(View $view)
	{

        $showroom   = Showroom::first();

        $showdetail = ShowroomDetail::where('showroom_id', $showroom->id)->get();

        $view->with('showroom',  $showroom);
        $view->with('showdetail',  $showdetail);

	}
}
