<?php

namespace Huuhu\Demo\base;

class DBMySQL
{
    // chua thong tin ket noi DB

    static $db;

    static function getDBInstance()
    {
        $servername = 'sql.freedb.tech';
        $username = 'freedb_huynh2123';
        $password = '8n6Re@kKFV?pY*8';
        $database_name = 'freedb_FreeDB123';
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