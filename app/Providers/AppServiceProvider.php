<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        view()->composer('contact', function( $view ) {
            $view->with('recaptcha_client', env('RECAPTCHA_CLIENT'));
        });

        view()->composer('components/ui/menu', function( $view ) {
            $view->with('current_locale', app()->getLocale());
        });

        view()->composer('components/ui/language-switch', function( $view ) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });

        view()->composer('components/ui/burguer-menu', function( $view ) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
    }
}
