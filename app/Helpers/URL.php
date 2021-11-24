<?php

namespace App\Helpers;

class URL
{
    /**
     * function asset function
     *
     * @param string $relative_item
     * @return string $url
     */
    public static function asset(string $relative_item = null)
    {
        return self::url($relative_item);
    }

    /**
     * function url function
     *
     * @param string $relative_item
     * @return string $url
     */
    public static function url(string $relative_item = null)
    {
        return self::getBaseHost().$relative_item;
    }

    /**
     * function getBaseHost function
     *
     * @param string $relative_item
     * @return string $url
     */
    public static function getBaseHost()
    {
        if(!($_SERVER['SERVER_NAME'] ?? null) && self::appHostBase())
        {
            return self::appHostBase();
        }

        $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';

        $base = $_SERVER['PROTOCOL'].'://'.$_SERVER['SERVER_NAME'];

        if ($_SERVER['SERVER_PORT'] != 80)
        {
            $base .= ':'.$_SERVER['SERVER_PORT'];
        }

        return $base;
    }

    /**
     * function appHostBase function
     *
     * @param string $relative_item
     * @return string $url
     */
    public static function appHostBase()
    {
        $env_base_host = env('APP_HOST_BASE');

        if($env_base_host && filter_var($env_base_host, FILTER_VALIDATE_URL))
        {
            return $env_base_host;
        }

        if(defined('APP_HOST_BASE') && filter_var(APP_HOST_BASE, FILTER_VALIDATE_URL))
        {
            return APP_HOST_BASE;
        }

        return null;
    }
}
