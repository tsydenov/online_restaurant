<?php

namespace App\Models;

use Core\Model\Model;

class MenuModel implements Model
{
    public static function getMenu($db, int $id)
    {
        $query = "SELECT * FROM Menu WHERE id=$id";

        $result = [];
        $db_response = $db->query($query);
        while ($row = $db_response->fetch()) {
            $result[] = $row;
        }

        return $result;
    }

    public static function getAllMenus($db)
    {
        $query = "SELECT * FROM Menu";

        $result = [];
        $db_response = $db->query($query);
        while ($row = $db_response->fetch()) {
            $result[] = $row;
        }

        return $result;
    }
}
