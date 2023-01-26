<?php

use Core\Immutable;
use App\Helpers\URL;
use Illuminate\Support\Arr;
// use Jenssegers\Blade\Blade;
use Beebmx\Blade\Blade;
use Core\Application\Boot\Init;

if (!function_exists('url'))
{
    function url(string $relative_item = null)
    {
        return URL::url($relative_item);
    }
}

if (!function_exists('asset'))
{
    function asset(string $relative_item = null)
    {
        return URL::asset($relative_item);
    }
}

if (!function_exists('env'))
{
    //vendor/illuminate/support/helpers.php ~ 123
    function env(string $key, $default = null, $must_be_type = null)
    {
        $value = ($_ENV[$key] ?? null);

        //Verifica o tipo de dado da variavel $value
        if ($must_be_type)
        {
            if (is_array($must_be_type))
            {
                if (!in_array($value, $must_be_type))
                {
                    return $default;
                }
            }
            else
            {
                if (gettype($value) !== $must_be_type)
                {
                    return $default;
                }
            }
        }

        return $value ?? $default;
    }
}

if (!function_exists('app'))
{
    function app(): Immutable
    {
        return Init::app();
    }
}

if (!function_exists('blade'))
{
    function blade(): Blade
    {
        return Init::app()->get('blade');
    }
}

if (!function_exists('view'))
{
    function view(string $view, array $data = [], array $mergeData = []): string
    {
        return Init::app()->get('blade')->render($view, $data, $mergeData);
    }
}

if (!function_exists('config'))
{
    /**
     * Get the specified configuration value.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function config($key, $default = null): mixed
    {
        return Init::app()->get('config')->get($key, $default);
    }
}

if (!function_exists('arr'))
{
    /**
     * @return \Illuminate\Support\Arr
     */
    function arr(): arr
    {
        return new Arr;
    }
}

if (!function_exists('byRouteName')) {

    /**
     * byRouteName function
     *
     * @param string $name
     * @param array $parameters
     *
     * @return string
     */
    function byRouteName(string $name, array $parameters = []): string
    {
        return \App\Helpers\Route::byRouteName($name, $parameters);
    }
}
