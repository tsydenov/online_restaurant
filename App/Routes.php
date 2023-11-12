<?php

namespace App;

use App\Controllers\AppController;
use App\Controllers\MenuController;
use Core\Route\Route;

// Создаем роуты

Route::add(
    $method = 'GET',
    $uri = '/',
    $controller = AppController::class,
    $page = 'home'
);
Route::add(
    $method = 'GET',
    $uri = '/menus',
    $controller = MenuController::class,
    $page = 'menus'
);
