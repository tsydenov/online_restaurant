<?php

namespace App\Models;

use Core\Model\Model;
use App\Config\Database;
use \PDO;

class Menu extends Model
{
    public function __construct(
        public int $id,
        public string $name,
        public string|null $description = null
    ) {
    }

    public static function getMenuById(int $id)
    {
        $db = Database::getDb();

        $query = $db->prepare("SELECT * FROM Menu WHERE id= :id");
        $query->bindParam(':id', $id);
        $query->execute();

        $fetched = $query->fetch(PDO::FETCH_ASSOC);

        if ($fetched) {
            return new Menu($fetched['id'], $fetched['name'], $fetched['description']);
        } else {
            require_once "App/Views/Errors/404.php";
        }
    }

    public static function getAllMenus()
    {
        $db = Database::getDb();

        $query = $db->prepare("SELECT * FROM Menu");
        $query->execute();

        $fetched = $query->fetchAll(PDO::FETCH_ASSOC);

        $result = [];
        foreach ($fetched as $menu) {
            $result[] = new Menu($menu['id'], $menu['name'], $menu['description']);
        }

        return $result;
    }
}
