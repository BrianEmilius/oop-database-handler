<?php
class Database {
    private static $dbHost     = "localhost";
    private static $dbName     = "test";
    private static $dbUsername = "root";
    private static $dbPassword = "";
    
    private static $connection = null;
    
    public function __construct() {
        die("You are not allowed to instantiate the class " . get_class($this) . PHP_EOL);
    }
     
    public static function connect() {
        if (self::$connection === null) {
            self::$connection = new PDO("mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbPassword); 
        }
        return self::$connection;
    }
    
    public static function disconnect() {
        self::$connection = null;
    }
}
