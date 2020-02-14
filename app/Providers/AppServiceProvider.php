<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request=null)
    {
    
        $utm = array(
                        'utm_source' => $request->input('utm_source'),
                        'utm_campaign' => $request->input('utm_campaign'),
                        'utm_anuncio_id' => $request->input('utm_anuncio_id'),
                    );

         View::share('utm', $utm);
    }
}
