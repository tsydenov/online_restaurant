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

    public static function getPage($uri)
    {
        // Ищем запрашиваемый uri среди имеющихся роутов 
        // и подключаем нужную страницу
        foreach (self::$routes as $route) {
            if ($route['uri'] === $uri) {
                // require_once "App/Views/Pages/" . $route['page'] . ".php";
                // die();
                return $route['page'];
            }
        }
        // require_once "App/Views/Errors/404.php";
        return '404';
    }
}
