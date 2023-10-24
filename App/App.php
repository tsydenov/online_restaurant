<?php

namespace App;

use App\Controllers\AppController;

include_once __DIR__ . "/Routes.php";

class App
{
    public function start()
    {
        AppController::listen();
    }
}
