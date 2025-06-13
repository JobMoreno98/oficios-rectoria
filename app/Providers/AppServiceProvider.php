<?php

namespace App\Providers;

use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Illuminate\Support\Facades\Gate;
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
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch->displayLocale('es'); // Sets French as the language for label localization
        });
        Gate::before(function ($user, $ability) {
            if ($user->hasRole('Super Admin')) {
                return true; // Super Admin tiene permiso para todo
            }
        });
    }
}
