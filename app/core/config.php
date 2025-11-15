<?php
define('HOST', '127.0.0.1');     // lebih stabil daripada localhost
define('PORT', '5432');          // port PostgreSQL default
define('USER', 'postgres');
define('PASS', 'passwordbaru');
define('DB1', 'pbl_kelompok5');
define('ROOT','http://localhost/pbl_web_admin/public');

try {
    $db1 = new PDO(
        "pgsql:host=" . HOST . ";port=" . PORT . ";dbname=" . DB1,
        USER,
        PASS
    );
    $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
