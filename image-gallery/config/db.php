<?php


class Database{
    //private $host  = 'localhost'; // Database host
    //private $user  = 'apicalvisaexpert_apicals'; // Database username
    //private $password   = "apicals@123#"; // Database password
    //private $database  = "apicalvisaexpert_apical"; // Database name
    
    private $host  = 'localhost'; // Database host
    private $user  = 'immigrationxpert_immi'; // Database username
    private $password   = "HB1]KU17O;Jg"; // Database password
    private $database  = "immigrationxpert_newimmi"; // Database name
       
    public function getConnection(){		
        // Create a new MySQLi connection
        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        
        // Check if connection was successful
        if($conn->connect_error){
            // If connection failed, display error message and terminate script execution
            die("Error failed to connect to MySQL: " . $conn->connect_error);
        } else {
            // If connection was successful, return the connection object
            return $conn;
        }
    }
}
?>
