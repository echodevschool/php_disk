<?php
namespace App\App\Database;

class Config
{
    public static array $confArray;

    public static function read($name)
    {
        return self::$confArray[$name];
    }

    public static function write($name, $value)
    {
        self::$confArray[$name] = $value;
    }

}

// db
Config::write('host', 'databasephp_disk');
Config::write('port', '3306');
Config::write('db', 'php_disk');
Config::write('user', 'root');
Config::write('pass', 'secret');
Config::write('charset', 'utf8');