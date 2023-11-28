<?php

namespace App\Controllers;

use Core\Controller\Controller;
use App\Models\MenuModel;

class MenuController implements Controller
{
    public static function render(string $page, array $params = null)
    {
        if (array_key_exists('id', $params)) {
            $data = MenuModel::getMenu($params['id']);
        } else {
            $data = MenuModel::getAllMenus();
        }
        if (empty($data)) {
            require_once "App/Views/Errors/404.php";
        } else {
            $data = json_encode($data, JSON_UNESCAPED_UNICODE);
            echo $data;
        }
    }
}
