<?php

namespace App;

use Core\Route\Router;

// Создаем роуты
Router::register('/', 'home');
Router::register('/signin', 'signin');
Router::register('/signup', 'signup');
Router::register('/menus', 'menus');
