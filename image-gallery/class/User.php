<?php
session_start(); // Ensure session is started

class User {
    private $userTable = 'user';
    private $conn;
    public $email;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login() {
        if ($this->email && $this->password) {
            $sqlQuery = "
                SELECT * FROM " . $this->userTable . " 
                WHERE email = ? AND password = ?";
            $stmt = $this->conn->prepare($sqlQuery);
            $password = md5($this->password);
            $stmt->bind_param("ss", $this->email, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                $_SESSION["userid"] = $user['id'];
                $_SESSION["name"] = $user["first_name"] . " " . $user["last_name"];
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function loggedIn() {
        return !empty($_SESSION["userid"]);
    }
}
?>
