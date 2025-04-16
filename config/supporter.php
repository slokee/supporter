<?php

return [
    'reserved_subdomains' => [
        'www', 'admin', 'mail', 'ftp', 'api', 'test',
    ],
    'default_page_size' => 25,
    'register_all_blade_directives' => env('REGISTER_ALL_BLADE_DIRECTIVES', true),
];
