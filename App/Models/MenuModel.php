<?php

namespace App\Models;

use Core\Model\Model;
use App\Config\Database;
use \PDO;

class MenuModel extends Model
{
    public static function getMenu(int $id)
    {
        $db = Database::getDb();

        $query = $db->prepare("SELECT * FROM Menu WHERE id= :id");
        $query->bindParam(':id', $id);
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public static function getAllMenus()
    {
        $db = Database::getDb();

        $query = $db->prepare("SELECT * FROM Menu");
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
