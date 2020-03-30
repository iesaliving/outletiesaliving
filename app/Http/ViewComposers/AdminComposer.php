<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Marca;

class AdminComposer {

	public function compose(View $view)
	{

  //       $news=\DB::table('posts')->where('type','NEWS')->count();
		// $appro=\DB::table('posts')->where('type','APPROFONDIMENTI')->count();

  //       $partner=\DB::table('partners')->where('status','PARTNER')->count();
  //       $asocciate=\DB::table('partners')->where('status','ASSOCIATE')->count();
  //       $councel=\DB::table('partners')->where('status','OF COUNSEL')->count();

  //       $gover=\DB::table('services')->where('status','GOVERNANCE')->count();
  //       $legale=\DB::table('services')->where('status','LEGALE')->count();

                $usr=\DB::table('users')->where('active','1')->count();

                $news  =0;
                $appro =0;

        	$view->with('news',  $news);
        	$view->with('appro',  $appro); 
                $view->with('usr',  $usr);
 

	}
}
