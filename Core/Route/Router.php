<?php

namespace Core\Route;

use Core\Route\Route;
use Core\Utils\Request;

class Router
{
    public static function listen()
    {
        $uri = Request::getUri();
        $method = Request::getMethod();

        $routes = Route::getRoutes();
        foreach ($routes as $route) {
            $pattern = self::createPattern($route['uri']);

            if (preg_match($pattern, $uri, $matches)) {
                $params = self::getParams($matches);
                $route['controller']::render($route['page'], $params);
                die();
            }
        }
        require_once "App/Views/Errors/404.php";
    }

    private static function createPattern($path)
    {
        return '#^' . preg_replace('#/{([^/]+)}#', '/(?<$1>[^/]+)', $path) . '/?$#';
    }

    private static function getParams($matches)
    {
        $params = [];
        foreach ($matches as $key => $match) {
            if (!is_int($key)) {
                $params[$key] = $match;
            }
        }

        return $params;
    }
}
