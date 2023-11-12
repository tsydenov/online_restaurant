<?php

namespace App\Controllers;

use Core\Controller\Controller;
use App\Models\MenuModel;

class MenuController implements Controller
{
    public static function render($page)
    {
        $data = MenuModel::getAllMenus();
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        // \dump($data);
        echo $data;
    }
}
