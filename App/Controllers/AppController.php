<?php

namespace App\Controllers;

use Core\Controller\Controller;
use Core\Route\Router;

class AppController implements Controller
{
    public static function listen()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $routes = Router::getRoutes();

        foreach ($routes as $route) {
            if ($route['uri'] === $uri) {
                require_once "App/Views/Pages/" . $route['page'] . ".php";
                die();
            }
        }
        require_once "App/Views/Errors/404.php";
    }
}
