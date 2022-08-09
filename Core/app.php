<?php

declare(strict_types=1);

use Jenssegers\Blade\Blade;
use Illuminate\Config\Repository;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/dot.php';
$config = require __DIR__ . '/config.php';

app()->put('config', (new Repository($config)), true);

app()->put(
    'blade',
    new Blade(
        config('app.views'),
        config('storage.cache')
    ),
    true
);
