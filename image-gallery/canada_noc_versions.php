<?php
include_once 'config/Database1.php';

// Initialize the Database class and get a connection
$database = new Database();
$pdo = $database->getConnection();

// Fetch NOC versions
$stmt = $pdo->query('SELECT id, version FROM noc_versions');
$versions = $stmt->fetchAll();
?>
