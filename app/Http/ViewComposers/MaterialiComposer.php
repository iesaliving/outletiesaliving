<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\{Post,PostDetail};

class MaterialiComposer {

	public function compose(View $view)
	{		
    	$lang=app()->getLocale();

        $news = Post::leftjoin('partners as a', 'posts.partner_id', '=', 'a.id')
                      ->join('post_detail as pd', 'posts.id', '=', 'pd.post_id')
                      ->where([
                            ['posts.type',   '=', 'NEWS'],
                            ['posts.status', '=', 'PUBLISHED'],
                            ['pd.lang',  '=', $lang],
                        ])
                     ->whereNotNull('pd.title')
                     ->select('posts.*','pd.title','pd.lang','pd.excerpt','a.name as author','a.slug as aslug')
                     ->orderBy('posts.publication_date', 'DESC')
                     ->limit(6)
                     ->get();

        $approfondimenties = Post::leftjoin('partners as a', 'posts.partner_id', '=', 'a.id')
                      ->join('post_detail as pd', 'posts.id', '=', 'pd.post_id')
                      ->where([
                            ['posts.type',   '=', 'APPROFONDIMENTI'],
                            ['posts.status', '=', 'PUBLISHED'],
                            ['pd.lang',  '=', $lang],
                        ])
                     ->whereNotNull('pd.title')
                     ->select('posts.*','pd.title','pd.lang','pd.excerpt','a.name as author','a.slug as aslug')
                     ->orderBy('posts.publication_date', 'DESC')
                     ->limit(6)
                     ->get();

		$view->with('news',  $news);
		$view->with('approfondimenties',  $approfondimenties);
 
	}
}
