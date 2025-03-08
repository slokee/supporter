<?php

namespace Slokee\Supporter;

use Illuminate\Support\ServiceProvider;

class SupportServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'supporter');
        $this->mergeConfigFrom(__DIR__ . '/../config/supporter.php', 'supporter');

        $this->publishes([
            __DIR__ . '/../lang' => lang_path('vendor/supporter'),
        ], 'supporter-translations');

        $this->publishes([
            __DIR__ . '/../config/supporter.php' => function_exists('config_path') 
                ? config_path('supporter.php') 
                : base_path('config/supporter.php'),
        ], 'supporter-config');
    }
}