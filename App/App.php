<?php

namespace App;

use App\Controllers\AppController;
use Core\Core;
use Core\Environ;

// Подключаем файл с роутами
include_once __DIR__ . "/Routes.php";

class App implements Core
{
    public static function start()
    {
        Environ::get_variables($_SERVER['DOCUMENT_ROOT']);
        AppController::listen();
    }
}
