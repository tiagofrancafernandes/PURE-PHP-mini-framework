<?php

use App\Helpers\URL;

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
