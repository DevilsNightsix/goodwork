<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language Support
    |--------------------------------------------------------------------------
    |
    | This file contains all the available language support
    |
    */

    'lang' => [
        'ar'    => 'Arabic',
        'de'    => 'German',
        'en'    => 'English',
        'es-ES' => 'Spanish (Spain)',
        'es-MX' => 'Spanish (Mexican)',
        'fr-FR' => 'French (France)',
        'it-IT' => 'Italian (Italy)',
        'nl-NL' => 'Dutch (Netherlands)',
        'pl'    => 'Polish',
        'pt-BR' => 'Portuguese (Brazil)',
        'ru-RU' => 'Russian (Russia)',
        'sv-se' => 'Swedish (Sweden)',
        'th'    => 'Thai (Thai)',
    ],

    'route_to_file' => [
        '/'                  => 'home',
        'projects/{project}' => 'project',
        'teams/{team}'       => 'project',
        'offices/{office}'   => 'project',
        'admin'              => 'admin',
        'users/{user}'       => 'user',
    ],
];