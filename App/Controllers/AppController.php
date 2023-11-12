<?php

namespace App\Controllers;

use Core\Controller\Controller;

class AppController implements Controller
{
    public static function render($page)
    {
        require_once "App/Views/" . $page . ".php";
    }
}
