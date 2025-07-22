<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enabled Switch
    |--------------------------------------------------------------------------
    |
    | This value controls if the environment banner should be shown or not.
    |
    */

    'enabled' => (bool) env('ENV_BANNER_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Current Environment
    |--------------------------------------------------------------------------
    |
    | This value is the current environment of your application.
    |
    */

    'environment' => env('ENV_BANNER_ENVIRONMENT', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Banner Colors
    |--------------------------------------------------------------------------
    |
    | These options control the color of the banner, they should be Tailwind
    | classes, dark class definitions do not need 'dark:', this will be
    | prefixed in the code.
    |
    */

    'colors' => [
        'bg' => env('ENV_BANNER_BG_COLOR_CLASS', 'bg-black'),
        'bg_dark' => env('ENV_BANNER_BG_DARK_COLOR_CLASS', 'bg-white'),
        'text' => env('ENV_BANNER_TEXT_COLOR_CLASS', 'text-white'),
        'text_dark' => env('ENV_BANNER_TEXT_DARK_COLOR_CLASS', 'text-black'),
    ],
];
