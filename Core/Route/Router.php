<?php

namespace Core\Route;

class Router
{
    private static array $routes = [];

    public static function register(string $uri, string $page)
    {
        self::$routes[] = [
            "uri" => $uri,
            "page" => $page
        ];
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }
}
