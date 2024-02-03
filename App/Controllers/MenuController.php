<?php

namespace App\Controllers;

use Core\Controller\Controller;
use App\Models\Menu;

class MenuController implements Controller
{
    public static function render(string $page, string $method, array $params = null)
    {
        if (array_key_exists('id', $params)) {
            $data = Menu::getMenuById($params['id']);
        } else {
            $data = Menu::getAllMenus();
        }
        if (empty($data)) {
            require_once "App/Views/Errors/404.php";
        } else {
            // $data = json_encode($data, JSON_UNESCAPED_UNICODE);
            \dump($data);
        }
    }
}
