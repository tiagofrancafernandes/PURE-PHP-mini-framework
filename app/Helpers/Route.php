<?php

namespace App\Helpers;

class Route
{
    /**
     * Route constructor.
     * @param string $name
     * @param string $path
     * @param mixed $handler
     *    $handler = [
     *      0 => (string) Controller name : HomeController::class.
     *      1 => (string|null) Method name or null if invoke method
     *    ]
     * @param array $methods
     *
     * @return \DevCoder\Route
     */
    public static function make(string $name, string $path, $handler, array $methods = ['GET'])
    {
        return new \DevCoder\Route($name, $path, $handler, $methods);
    }

    /**
     * get function
     *
     * @param ...$params
     * @return \DevCoder\Route
     */
    public static function get(...$params)
    {
        return \DevCoder\Route::get(...$params);
    }

    /**
     * post function
     *
     * @param ...$params
     * @return \DevCoder\Route
     */
    public static function post(...$params)
    {
        return \DevCoder\Route::post(...$params);
    }

    /**
     * put function
     *
     * @param ...$params
     * @return \DevCoder\Route
     */
    public static function put(...$params)
    {
        return \DevCoder\Route::put(...$params);
    }
}
