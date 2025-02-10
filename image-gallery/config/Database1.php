<?php
session_start(); // Start the session
class Database {
    // Database credentials
    private $host = 'localhost'; // Database host
    private $user = 'immigrationxpert_immi'; // Database username
    private $password = 'HB1]KU17O;Jg'; // Database password
    private $database = 'immigrationxpert_newimmi'; // Database name

    // Method to get database connection
    public function getConnection() {
        $dsn = "mysql:host={$this->host};dbname={$this->database}";
        $pdo = null;

        try {
            // Create a new PDO instance
            $pdo = new PDO($dsn, $this->user, $this->password);
            // Set PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // If connection fails, display error message and terminate script execution
            die("Connection failed: " . $e->getMessage());
        }

        // Return the PDO instance
        return $pdo;
    }
}
?>
