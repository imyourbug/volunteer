<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer(
            [
                'user.subheader',
                'user.home',
            ],
            'App\Http\ViewComposers\VolunteerHourComposer'
        );
    }
}
