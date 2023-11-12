<?php

namespace App\Controllers;

use Core\Controller\Controller;
use Core\Route\Router;
use Core\Utils\Request;

class AppController implements Controller
{
    public static function listen()
    {
        $uri = Request::getUri();
        $page = Router::getPage($uri);

        self::view($page);
    }

    private static function view($page)
    {
        require_once "App/Views/Pages/" . $page . ".php";
    }
}
