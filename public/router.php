<?php
// router.php
if (php_sapi_name() === 'cli-server') {
    $url = parse_url($_SERVER['REQUEST_URI']);
    $path = __DIR__ . $url['path'];

    // Jika file fisik ada, tampilkan langsung
    if (is_file($path)) {
        return false;
    } else {
        // Arahkan semua request ke index.php
        $_GET['url'] = trim($url['path'], '/');
        include_once __DIR__ . '/index.php';
    }
}
