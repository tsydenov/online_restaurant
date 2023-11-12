<?php

namespace App\Controllers;

use Core\Controller\Controller;
use Core\Route\Router;
use Core\Utils\Request;

class AppController implements Controller
{
    public static function render($page)
    {
        require_once "App/Views/" . $page . ".php";
    }
}
