<?php
// Database configuration
define('DB_HOST', 'db');
define('DB_NAME', 'taloushallinto');
define('DB_USER', getenv('DB_USER'));
define('DB_PASS', getenv('DB_PASS'));

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>