<?php
    class Database{
        public static function connectionMysql(){
            $host = "";
            $username = "";
            $password = "";
            $databasename= "";
            $connection = new mysqli($host,$username,$password,$databasename);
            return $connection();
        }
    }


?>