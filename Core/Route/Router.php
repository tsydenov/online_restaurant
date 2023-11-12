<?php

namespace Core\Route;

use Core\Route\Route;
use Core\Utils\Request;
use App\Controllers\AppController;

class Router
{
    public static function listen()
    {
        $uri = Request::getUri();
        $method = Request::getMethod();

        $routes = Route::getRoutes();
        foreach ($routes as $route) {
            if ($route['uri'] === $uri) {
                $route['controller']::render($route['page']);
                die();
            }
        }
        require_once "App/Views/Errors/404.php";
    }
}
