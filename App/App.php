<?php

namespace App;

use App\Controllers\AppController;
use Core\Core;

include_once __DIR__ . "/Routes.php";

class App implements Core
{
    public static function start()
    {
        AppController::listen();
    }
}
