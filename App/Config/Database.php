<?php

namespace App\Config;

use PDOException;
use PDO;

class Database
{
    public static function connect()
    {
        $connection = null;
        try {
            $db = "mysql:host=" . $_ENV['DB_HOST'] . ";" .
                "port=" . $_ENV['DB_PORT'] . ";" .
                "dbname=" . $_ENV['DB_NAME'];
            $connection =  new PDO($db, $_ENV['DB_USER'], $_ENV['DB_PASS']);
            // echo "Database connection established";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $connection;
    }
}
