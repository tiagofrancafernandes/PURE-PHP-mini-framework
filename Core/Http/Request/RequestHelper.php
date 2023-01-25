<?php

namespace Utils;

class RequestHelper
{
    /**
     * function getServer
     *
     * @return mixed
     */
    public static function getServer(?string $key = null, mixed $default = null): mixed
    {
        return $_SERVER[$key] ?? $default ?? $_SERVER;
    }

    /**
     * function getMethod
     *
     * @return mixed
     */
    public static function getMethod(?string $default = null): mixed
    {
        return $_SERVER['REQUEST_METHOD'] ?? $default ?? $_SERVER;
    }

    /**
     * function getSession
     *
     * @return mixed
     */
    public static function getSession(?string $key = null, mixed $default = null): mixed
    {
        return $_SESSION[$key] ?? $default ?? $_SESSION;
    }

    /**
     * function getFiles
     *
     * @return mixed
     */
    public static function getFiles(?string $key = null, mixed $default = null): mixed
    {
        return $_FILES[$key] ?? $default ?? $_FILES;
    }

    /**
     * function getCookie
     *
     * @return mixed
     */
    public static function getCookie(?string $key = null, mixed $default = null): mixed
    {
        return $_COOKIE[$key] ?? $default ?? $_COOKIE;
    }

    /**
     * function getEnv
     *
     * @return mixed
     */
    public static function getEnv(?string $key = null, mixed $default = null): mixed
    {
        return $_ENV[$key] ?? $default ?? $_ENV;
    }

    /**
     * function getGet
     *
     * @return mixed
     */
    public static function getGet(?string $key = null, mixed $default = null): mixed
    {
        return $_GET[$key] ?? $default ?? $_GET;
    }

    /**
     * function getRequest
     *
     * @return mixed
     */
    public static function getRequest(?string $key = null, mixed $default = null): mixed
    {
        return $_REQUEST[$key] ?? $default ?? $_REQUEST;
    }

    /**
     * function getPost
     *
     * @return mixed
     */
    public static function getPost(?string $key = null, mixed $default = null): mixed
    {
        return $_POST[$key] ?? $default ?? $_POST;
    }

    /**
     * function getUri
     *
     * @return ?string
     */
    public static function getUri(): ?string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        return rawurldecode($uri !== '/' ? trim($uri, '/') : $uri);
    }

    /**
     * function getBaseUrl
     *
     * @return ?string
     */
    public static function getBaseUrl(): ?string
    {
        $uri = $_SERVER['SCRIPT_NAME'] ?? $_SERVER['PHP_SELF'] ?? '/';

        $final = strtolower(pathinfo($uri)['dirname'] ?? '/');

        return rawurldecode($final !== '/' ? trim($final, '/') : $final);
    }

    /**
     * function getFinalUri
     *
     * @return ?string
     */
    public static function getFinalUri(): ?string
    {
        return str_replace(static::getBaseUrl(), '', static::getUri());
    }

    /**
     * function requestJson
     *
     * @return ?array
     */
    public static function requestJson(): ?array
    {
        try {
            return json_decode(
                file_get_contents("php://input"),
                true
            ) ?? [];
        } catch (\Throwable $th) {
            return [];
        }
    }

    /**
     * function requestContentType
     *
     * @return string
     */
    public static function requestContentType(): string
    {
        return (string) ($_SERVER['CONTENT_TYPE'] ?? null);
    }

    /**
     * function requestAccept
     *
     * @return string
     */
    public static function requestAccept(): string
    {
        return (string) ($_SERVER['HTTP_ACCEPT'] ?? $_SERVER['ACCEPT'] ?? null);
    }

    /**
     * function input
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public static function input(
        string $key,
        mixed $default = null
    ): mixed
    {
        if (
            str_contains(
                strtolower(
                    static::requestContentType()
                ),
                'application/json'
            )
        ) {
            return static::requestJson()[$key] ?? null;
        }

        return $_GET[$key] ?? $_POST[$key] ?? $_REQUEST[$key] ?? null;
    }
}
