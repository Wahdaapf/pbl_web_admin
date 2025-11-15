<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

spl_autoload_register(function($classname){
    $filename = __DIR__ . "/../models/" . ucfirst($classname) . ".php";
    if (file_exists($filename)) {
        require $filename;
    }
});

// LOAD CONFIG (WAJIB PALING ATAS DAN PAKAI __DIR__)
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/Model.php";
require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/App.php";
require_once __DIR__ . "/Auth.php";
