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
        $this->publishes([
            __DIR__.'/../config/supporter.php' => config_path('supporter.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../lang' => lang_path('vendor/supporter'),
        ], 'supporter-lang');
    }
}