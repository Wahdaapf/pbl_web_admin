<?php
$host = 'localhost';
$port = '5432';
$dbname = 'prakwebdb';
$user = 'postgres';
$password = 'passwordbaru';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
