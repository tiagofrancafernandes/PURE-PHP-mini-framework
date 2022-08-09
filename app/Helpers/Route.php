<?php

namespace App\Helpers;

class Route
{
    /**
     * make function
     *
     * @param ...$params
     * @return \DevCoder\Route
     */
    public static function make(...$params)
    {
        return new \DevCoder\Route(...$params);
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
