<?php
namespace core;

class Database {
    private static $_pdo;
    public static function getInstance() {
        if(!isset(self::$_pdo)) {
            self::$_pdo = new \PDO($_ENV['DB_DRIVER'].":host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        }
        return self::$_pdo;
    }

    private function __construct() { }
    private function __clone() { }
    private function __wakeup() { }
}