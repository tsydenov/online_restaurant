<?php

namespace Core\Route;

class Route
{
    private static array $routes = [];

    public static function add(
        string $method,
        string $uri,
        string $controller,
        string $page
    ) {
        self::$routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "page" => $page,
            "method" => $method,
        ];
    }

    public static function getRoutes()
    {
        return self::$routes;
    }
}
