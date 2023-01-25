<?php

use App\Helpers\URL;
use Core\Immutable;
use Jenssegers\Blade\Blade;
use Illuminate\Support\Arr;

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
        return \Core\Application\Boot\Init::app();
    }
}

if (!function_exists('blade'))
{
    function blade(): Blade
    {
        return app()->get('blade');
    }
}

if (!function_exists('view'))
{
    function view(string $view, array $data = [], array $mergeData = []): string
    {
        return app()->get('blade')->render($view, $data, $mergeData);
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
        return app()->get('config')->get($key, $default);
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
