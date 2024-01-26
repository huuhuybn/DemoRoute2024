<?php

namespace Huuhu\Demo\base;

class DBMySQL
{
    // chua thong tin ket noi DB

    static $db;

    static function getDBInstance(){
        $servername = $_ENV['SERVER_URL'];
        $username = $_ENV['TK'];
        $password = $_ENV['MK'];
        $database_name = $_ENV['DB'];
        if (!isset($db)) {
            // khoi tao ket noi DB !!!
            self::$db = new \PDO("mysql:host={$servername};
            dbname={$database_name}",
                $username, $password);
            self::$db->setAttribute(\PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION);
        }
        return self::$db;
    }


}