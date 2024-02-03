<?php

namespace App\Controllers;

use Core\Controller\Controller;

class AppController implements Controller
{
    public static function render(string $page, string $method, array $params = null)
    {
        require_once "App/Views/Pages/" . $page . ".php";
    }
}
