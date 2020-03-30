<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Partner;

class PostComposer {

	public function compose(View $view)
	{

        $author= Partner::select('id', 'name')
                          ->orderBy('name', 'ASC')
                          ->pluck('name','id');

        $view->with('author',  $author);

	}
}
