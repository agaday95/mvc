<?php

namespace MVC\Config;

use PDO;

class Database
{
    private static $bdd = null;

    private function __construct()
    {

    }

    // Connect database
    public static function getBdd()
    {
        if (is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost;dbname=mvc", 'root', '');
        }
        return self::$bdd;
    }
}
