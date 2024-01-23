<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Config::set('app.short_company_name', 'Silverlion');
        Config::set('app.full_company_name', 'Silverlion Securities Limited');
        
        if (App::environment('production')) {
        	resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');
        	$this->app['request']->server->set('HTTPS', true);
        }

    }
}
