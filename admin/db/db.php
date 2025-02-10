<?php
//$servername = "localhost"; // Replace with your database server name or IP address
//$username = "root"; // Replace with your database username
//$password = ""; // Replace with your database password
//$database = "apical"; // Replace with your database name

//$servername = "localhost"; // Replace with your database server name or IP address
//$username = "apicalvisaexpert_apicals"; // Replace with your database username
//$password = "apicals@123#"; // Replace with your database password
//$database = "apicalvisaexpert_apical"; // Replace with your database name

// Create a connection
//$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}

// Set character set to UTF-8 (if needed)
//$conn->set_charset("utf8");

$host = 'localhost';
$db   = 'apicalvisaexpert_apical';
$user = 'apicalvisaexpert_apicals';
$pass = 'apicals@123#';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>
