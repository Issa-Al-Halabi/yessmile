<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
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
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label('Home')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('About Us')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Our World')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Forms')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Privacy & Terms')
                    ->collapsed(),
            ]);
        });
    }
}
