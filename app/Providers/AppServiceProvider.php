<?php

namespace App\Providers;

use Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use View;

class AppServiceProvider extends ServiceProvider
{
   
    public function register()
    {
        //
    }

   
    public function boot(Request $request=null)
    {
        \Carbon\Carbon::setlocale(config('app.locale'));
    	Schema::defaultStringLength(191);
        $this->app->alias('bugsnag.logger', \Illuminate\Contracts\Logging\Log::class);
        $this->app->alias('bugsnag.logger', \Psr\Log\LoggerInterface::class);

         $utm = array(
                        'utm_source' => $request->input('utm_source'),
                        'utm_campaign' => $request->input('utm_campaign'),
                        'utm_anuncio_id' => $request->input('utm_anuncio_id'),
                    );

         View::share('utm', $utm);
    }
}
