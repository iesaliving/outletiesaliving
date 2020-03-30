<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Post::class, 50)->create()->each(function(App\Post $post) {
        	$post->tags()->attach([
        		rand(1,5), 
        		rand(6,14), 
        		rand(15,20)
        	]);
        });

       factory(App\Partner::class, 10)->create();
       factory(App\Partnerdetail::class, 20)->create();
       factory(App\contact::class, 1)->create();
       factory(App\Service::class, 20)->create();
       factory(App\ServiceDetail::class, 40)->create();
    }
}
