<?php
class DataBase{
    #  Conexión Local
    public static function connection(){
        ## Conexión Local
        $hostname = "localhost";
        $port = "3306";
        $database = "db_projecto";
        $username = "root";
        $password = "";
        $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
    }
?>