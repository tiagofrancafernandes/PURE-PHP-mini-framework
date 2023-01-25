<?php

namespace Core\Http\Request;

class RequestListener
{
    /**
     * function listen
     *
     * @param \DevCoder\Router $router
     * @return void
     */
    public static function listen(\DevCoder\Router $router): void
    {
        try {
            // Example
            // \Psr\Http\Message\ServerRequestInterface
            //$route = $router->match(ServerRequestFactory::fromGlobals());
            // OR

            // $_SERVER['REQUEST_URI'] = '/api/articles/2'
            // $_SERVER['REQUEST_METHOD'] = 'GET'

            $route = $router->matchFromPath($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

            $parameters = $route->getParameters();
            // $arguments = ['id' => 2]
            $arguments = $route->getVars();

            try {
                $controllerName = $parameters[0];
                $methodName = $parameters[1] ?? null;

                $controller = new $controllerName();
                if (!is_callable($controller)) {
                    $controller =  [$controller, $methodName];
                }

                echo $controller(...array_values($arguments));
                die();
            } catch (\Throwable $th) {
                //throw $th;
                \http_response_code(500);
                header("HTTP/1.0 500 Server Error");
                die(\sprintf(
                    \implode('<pre><br></pre>', [
                        'Error: %s',
                        'File: %s:%s',
                        'Line: %s',
                    ]),
                    $th->getMessage(),
                    $th->getFile(),
                    $th->getLine(),
                    $th->getLine(),
                ));
            }
        } catch (\Exception $exception) {
            header("HTTP/1.0 404 Not Found");
            echo 'Not Found';
            die();
        }
    }
}
