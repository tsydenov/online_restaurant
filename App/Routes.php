<?php

namespace App;

use Core\Route\Router;

Router::register('/', 'home');
Router::register('/signin', 'signin');
Router::register('/signup', 'signup');
Router::register('/menus', 'menus');
