<?php

namespace Slokee\Supporter;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Slokee\Supporter\Contracts\BladeDirectiveInterface;

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

        if (config('register_all_directives', true)) {
            $this->registerAllDirectives();
        }
    }

    public function registerAllDirectives()
    {
        $directiveClasses = $this->getBladeDirectiveClasses();
        foreach ($directiveClasses as $class) {
            $class::register();

        }
    }

    protected function getBladeDirectiveClasses()
    {
        $files = File::allFiles(__DIR__.'/Blade/Directives/');

        $classes = [];

        foreach ($files as $file) {
            $class = 'Slokee\\Supporter\\Blade\\Directives\\' . $file->getFilenameWithoutExtension();

            if (is_subclass_of($class, BladeDirectiveInterface::class)) {
                $classes[] = $class;
            }
        }

        return $classes;
    }
}
