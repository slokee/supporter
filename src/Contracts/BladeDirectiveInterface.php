<?php

namespace Slokee\Supporter\Contracts;

interface BladeDirectiveInterface
{
    /**
     * Register the directive with Blade.
     */
    public static function register(): void;
}
