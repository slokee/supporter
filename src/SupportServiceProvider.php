<?php

namespace Slokee\Supporter;

use Illuminate\Support\ServiceProvider;

class SupportServiceProvider extends ServiceProvider
{
    public function register() {}

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/supporter.php', 'supporter');

        $this->publishes([
            __DIR__.'/../config/supporter.php' => function_exists('config_path')
                ? config_path('supporter.php')
                : base_path('config/supporter.php'),
        ], 'supporter-config');

        $this->publishes([
            __DIR__.'/../stubs' => base_path('stubs/supporter'),
        ], 'supporter-stubs');
    }
}
