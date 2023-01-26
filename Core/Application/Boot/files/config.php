<?php

return [
    'app' => [
        'name' => env('APP_NAME', 'Pure Base'),
        'env' => env('APP_ENV', 'production'),
        'base_path' => __DIR__ . '/../../../../',
        'views' => __DIR__ . '/../../../../Resources/views',
    ],

    'storage' => [
        'path' => __DIR__ . '/../../../../storage',
        'cache' => __DIR__ . '/../../../../storage/cache',
    ],
];
