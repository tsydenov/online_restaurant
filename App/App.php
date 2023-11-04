<?php

namespace App;

use App\Controllers\AppController;
use Core\Core;

// Подключаем файл с роутами
include_once __DIR__ . "/Routes.php";

class App implements Core
{
    public static function start()
    {
        AppController::listen();
    }
}
