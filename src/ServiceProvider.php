<?php

namespace SamSmithCodes\EnvironmentBanner;

use Illuminate\Support\Facades\Blade;
use SamSmithCodes\EnvironmentBanner\View\Components\Banner;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/environment-banner.php', 'environment-banner'
        );
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config
        $this->publishes([
            __DIR__.'/../config/environment-banner.php' => config_path('environment-banner.php'),
        ], 'environment-banner-config');

        // Publish component view
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/environment-banner'),
        ], 'environment-banner-view');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'environment-banner');

        // Register Blade component
        // Makes <x-environment-banner /> available
        Blade::component('environment-banner', Banner::class);
    }
}
