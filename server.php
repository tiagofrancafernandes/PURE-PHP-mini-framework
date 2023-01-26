<?php
declare(strict_types=1);

try {
    require_once __DIR__ . '/Core/Application/Boot/files/bootstrap.php';

    // $app = new \Core\Application\Boot\Init(__DIR__);
    $app = \Core\Application\Boot\Init::app();

    \Core\Http\Request\RequestListener::listen(
        new \DevCoder\Router(require __DIR__ . '/routes.php')
    );
} catch (\Throwable $th) {
    $app = \Core\Application\Boot\Init::app();

    if ($app->get('config')->get('app.env') === 'production') {
        \Core\Http\Response\Response::errorPage($th->getMessage());
        die();
    }

    throw $th;
}
