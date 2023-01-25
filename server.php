<?php
declare(strict_types=1);

try {
    require_once __DIR__ . '/Core/Application/Boot/files/bootstrap.php';

    new \Core\Application\Boot\Init(__DIR__);

    \Core\Http\Request\RequestListener::listen(
        new \DevCoder\Router(require __DIR__ . '/routes.php')
    );
} catch (\Throwable $th) {
    header("HTTP/1.0 500 Server error");
    throw $th;
}
