<?php

namespace App;

use App\Controllers\AppController;
use Core\Route\Route;

// Создаем роуты


Route::add(
    $method = 'GET',
    $uri = '/',
    $controller = AppController::class,
    $page = 'home'
);
