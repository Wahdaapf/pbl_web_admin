<?php

if (!defined('DBHOST')) {
    require_once __DIR__ . '/config.php';
}

class Database
{
    public static function connect()
    {
        try {
            $dsn = "pgsql:host=" . HOST . ";port=" . PORT . ";dbname=" . DB1;
            $db = new PDO($dsn, USER, PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            die("Error Connection: " . $e->getMessage());
        }
    }
}
