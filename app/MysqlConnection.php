<?php


namespace App;


use PDO;

class MysqlConnection
{
    private static $connection;

    public static function getConnection()
    {
        if(!self::$connection) self::$connection = new PDO('mysql:dbname=framework;host=localhost', 'framework', 'Framework123@');
        return self::$connection;
    }

}