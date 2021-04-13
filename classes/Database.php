<?php

class Database
{
    public function getConn()
    {
        $db_host = "localhost";
        $db_name = "exco";
        $db_user = "root";
        $db_pass = "";
        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';
        try {
            $db = new PDO($dsn, $db_user, $db_pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;

        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
