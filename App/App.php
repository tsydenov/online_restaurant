<?php

namespace App;

use App\Controllers\AppController;
use Core\Core;
use App\Config\Database;
use Core\Utils\Environ;

// Подключаем файл с роутами
include_once __DIR__ . "/Routes.php";

class App implements Core
{
    public static function start()
    {
        Environ::create_constants($_SERVER['DOCUMENT_ROOT']);
        $db = Database::connect();
        AppController::listen();
    }
}
