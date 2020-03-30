<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        /***************WEB****************/
        View::composer('index' , 'App\Http\ViewComposers\HomeComposer');
        View::composer('modulos.showrooms', 'App\Http\ViewComposers\ShowroomComposer');
        View::composer('servicios', 'App\Http\ViewComposers\ServicesComposer');
        View::composer('showroom',  'App\Http\ViewComposers\ShowroomPageComposer');
        View::composer('contacto',  'App\Http\ViewComposers\FooterComposer');
        View::composer('nosotros',  'App\Http\ViewComposers\AboutComposer');
        View::composer('faq-index', 'App\Http\ViewComposers\FaqComposer');
        View::composer('aviso-privacidad', 'App\Http\ViewComposers\NoticePrivacyComposer');

        View::composer(['hero.asko','hero.cove','hero.dexa','hero.exteriores','hero.scotsman','hero.subzero','hero.wolf','hero-mobile.asko','hero-mobile.cove','hero-mobile.dexa','hero-mobile.exteriores','hero-mobile.scotsman','hero-mobile.subzero','hero-mobile.wolf'] , 'App\Http\ViewComposers\ImageComposer');


        //********ADMIN*********/
        View::composer('admin.home', 'App\Http\ViewComposers\AdminComposer');
        
    }

    public function register()
    {
        //
    }

}
