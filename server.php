<?php
require_once __DIR__ . '/Core/app.php';

try {
    // Example
    // \Psr\Http\Message\ServerRequestInterface
    //$route = $router->match(ServerRequestFactory::fromGlobals());
    // OR

    // $_SERVER['REQUEST_URI'] = '/api/articles/2'
    // $_SERVER['REQUEST_METHOD'] = 'GET'

    $router = new \DevCoder\Router(require __DIR__ . '/routes.php');
    $route = $router->matchFromPath($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

    $parameters = $route->getParameters();
    // $arguments = ['id' => 2]
    $arguments = $route->getVars();

    $controllerName = $parameters[0];
    $methodName = $parameters[1] ?? null;

    $controller = new $controllerName();
    if (!is_callable($controller)) {
        $controller =  [$controller, $methodName];
    }

    echo $controller(...array_values($arguments));
} catch (\Exception $exception) {
    header("HTTP/1.0 404 Not Found");
}
