<?php
    class Connection{
        public static function connectionMysql(){
            $host = "localhost";
            $username = "root";
            $password = "";
            $databasename= "hotel";
            $connection = new mysqli($host,$username,$password,$databasename);
            return $connection;
        }
    }


?>