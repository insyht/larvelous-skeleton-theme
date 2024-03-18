<?php

namespace Insyht\LarvelousSkeletonTheme\Providers;

use Illuminate\Support\ServiceProvider;
use Insyht\LarvelousSkeletonTheme\Console\InstallPlugin;
use Insyht\LarvelousSkeletonTheme\Console\InstallTheme;

class SkeletonThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../../public/vendor/insyht/larvelous-skeleton-theme' => public_path('vendor/insyht/larvelous-skeleton-theme'),
                __DIR__ . '/../../resources/js' => public_path('vendor/insyht/larvelous-skeleton-theme/js')
            ],
            'insyht-larvelous-skeleton-theme'
        );
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'insyht-larvelous-skeleton-theme');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'insyht-larvelous-skeleton-theme');

        // Todo Als Theme::fresh_install === true, dan het InstallTheme commando uitvoeren
        if ($this->app->runningInConsole()) {
            $this->commands(
                [
                    InstallTheme::class,
                ]
            );
        }
    }
}
