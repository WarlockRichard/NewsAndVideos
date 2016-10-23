<?php

/**
 * DBGateway short summary.
 *
 * DBGateway description.
 *
 * @version 1.0
 * @author Ярослав
 */
class DBGateway// static class
{
    static $dblogin = "root";
    static $dbpass = "";
    static $db = "newsandvideos";
    static $dbhost="127.0.0.1";

    static $link;
    static $query;
    static $err;
    static $result;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    static function connect() {
        self::$link = mysqli_connect(self::$dbhost, self::$dblogin, self::$dbpass, self::$db);
        if (!self::$link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

    static function close() {
        mysqli_close(self::$link);
    }

    static function run($query) {
        self::$query = $query;
        self::$result = mysqli_query(self::$link,self::$query);
        self::$err = mysqli_connect_errno();
    }
    static function GetMultiple($type, $quantity = 0){
        if ($quantity > 0){
            self::run("SELECT * FROM ".$type." LIMIT ".$quantity.";");
            if(self::$result == FALSE){
                return NULL;
            }
            return self::$result->fetch_all();
        }
        else{
            self::run("SELECT * FROM ".$type.";");
            if(self::$result == FALSE){
                return NULL;
            }
            return self::$result->fetch_all();
        }
    }

    static function Get($type, $id){
        self::run("SELECT * FROM ".$type." WHERE id = ".$id.";");
        if(self::$result == FALSE){
            return NULL;
        }
        return self::$result->fetch_row();
    }
}