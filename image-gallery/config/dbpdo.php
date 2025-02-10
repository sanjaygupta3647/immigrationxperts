<?php
// Database connection settings
$host = 'localhost';
$dbname = 'immigrationxpert_newimmi';
$username = 'immigrationxpert_immi';
$password = 'HB1]KU17O;Jg';

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
