<?php

class Conexion {

    private static $server = "localhost:3306";
    private static $username = "root";
    private static $password = "";
    private static $database = "lion";
    private static $link;

    private static function constructor(){
        self::$link = mysqli_connect(self::$server, self::$username, self::$password, self::$database);
        self::$link->set_charset("utf8");
    }

    public static function query($sql) {
        self::constructor();
        return self::$link->query($sql);
    }

}
?>