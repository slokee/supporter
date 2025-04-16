<?php

namespace Slokee\Supporter\Blade\Directives;

use Illuminate\Support\Facades\Blade;
use Slokee\Supporter\Contracts\BladeDirectiveInterface;

class Listify implements BladeDirectiveInterface
{
    public static function register(): void
    {
        Blade::directive('listify', function ($expression) {
            return "<?php
                // Unpack the arguments into individual variables:
                list(\$text, \$tag, \$listClass, \$itemClass) = [{$expression}];
        
                // Provide defaults if some args are missing:
                \$tag       = \$tag       ?? 'ul';
                \$listClass = \$listClass ?? '';
                \$itemClass = \$itemClass ?? '';
        
                // Escape and split into lines
                \$lines = preg_split('/\\r?\\n/', e(\$text));
        
                // Open list tag
                echo '<'.\$tag. (\$listClass ? ' class=\"'.\$listClass.'\"' : '') . '>';
        
                // Render each non-empty line
                foreach (\$lines as \$line) {
                    \$line = trim(\$line);
                    if (\$line !== '') {
                        echo '<li' . (\$itemClass ? ' class=\"'.\$itemClass.'\"' : '') . '>' . \$line . '</li>';
                    }
                }
        
                // Close list tag
                echo '</'.\$tag.'>';
            ?>";
        });
    }
}