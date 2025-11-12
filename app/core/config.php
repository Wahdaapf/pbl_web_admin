<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    /* Local Database Connection */
    define('DBHOST', 'localhost');
    define('DBNAME', 'php_mvc');
    define('DBUSER', 'root');
    define('DBPASS', '');

    /* Specify the default URL (auto detect folder) */
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
        ? "https://" : "http://";

    // Ambil path folder project otomatis
    $rootPath = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

    define('ROOT', $protocol . $_SERVER['HTTP_HOST'] . $rootPath);

    // true means show errors
    define('DEBUG', true);

} else {
    /* Production Database Connection */
    define('DBHOST', '');
    define('DBNAME', '');
    define('DBUSER', '');
    define('DBPASS', '');

    /* Specify the default URL */
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
        ? "https://" : "http://";

    define('ROOT', $protocol . $_SERVER['HTTP_HOST'] . '/');

    // false means don't show errors 
    define('DEBUG', false);
}

define('APP_NAME', 'My Website');
define('APP_DESC', 'My Website Description');
