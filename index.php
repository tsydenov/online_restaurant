<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . "/vendor/autoload.php";

use App\App;

$app = new App();
$app->start();
