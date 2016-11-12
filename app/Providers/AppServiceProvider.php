<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('Illuminate\Contracts\Http\Kernel')->pushMiddleware('\App\Http\Middleware\EncryptCookies::class');
        $this->app->make('Illuminate\Contracts\Http\Kernel')->pushMiddleware('\Illuminate\Session\Middleware\StartSession::class');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }
    }
}
