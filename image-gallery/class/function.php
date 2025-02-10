<?php
class FunctionGallery {
    private $userGalleryTable = 'user_gallery';
    private $conn;
    private $userId; // Add this property

    public function __construct($db, $userId) {
        $this->conn = $db;
        $this->userId = $userId; // Set the userId in the constructor
    }
    public function getGalleryList() {
        $sqlQuery = "
            SELECT `id`, `user_id`, `name`, `details`, `image`, `category`, `occupation` as id
            FROM " . $this->userGalleryTable . " 
            WHERE user_id='" . $this->userId . "'";

        $stmt = $this->conn->prepare($sqlQuery);

        if (!$stmt) {
            throw new Exception("Error preparing statement: " . $this->conn->error);
        }

        if (!$stmt->execute()) {
            throw new Exception("Error executing statement: " . $stmt->error);
        }

        $result = $stmt->get_result();

        if (!$result) {
            throw new Exception("Error getting result: " . $this->conn->error);
        }

        return $result;
    }
	
    public function insert(){
        
        if($this->image && $this->userId) {

            $stmt = $this->conn->prepare("
                INSERT INTO ".$this->userGalleryTable."(`user_id`, `name`, `details`, `image`, `category`, `occupation`)
                VALUES(?, ?, ?, ?, ?, ?)");
            
            $this->image = htmlspecialchars(strip_tags($this->image));
            $this->details = htmlspecialchars(strip_tags($this->details));
            $this->name = htmlspecialchars(strip_tags($this->name));
            $this->category = htmlspecialchars(strip_tags($this->category));
            $this->occupation = htmlspecialchars(strip_tags($this->occupation));
            
            $stmt->bind_param("sssss", $this->userId, $this->name, $this->details, $this->image, $this->category, $this->occupation);
            
            if($stmt->execute()){
                return true;
            }       
        }
    }

    public function delete() {
        if ($this->id && $this->userId) {
            $imgSqlQuery = "
                SELECT image
                FROM " . $this->userGalleryTable . " 
                WHERE id = ? AND user_id='" . $this->userId . "'";

            $imgStmt = $this->conn->prepare($imgSqlQuery);
            $imgStmt->bind_param("i", $this->id);
            $imgStmt->execute();

            $result = $imgStmt->get_result();

            if (!$result) {
                throw new Exception("Error getting result: " . $this->conn->error);
            }

            $imageName = '';
            while ($image = $result->fetch_assoc()) {
                $imageName = $image["image"];
            }

            $stmt = $this->conn->prepare("
                DELETE FROM " . $this->userGalleryTable . " 
                WHERE id = ? AND user_id = ?");

            $this->id = htmlspecialchars(strip_tags($this->id));

            $stmt->bind_param("ii", $this->id, $this->userId);

            if ($stmt->execute()) {
                $filePath = $_SERVER['DOCUMENT_ROOT'] . "/uploads/" . $imageName;

                if ($imageName && file_exists($filePath)) {
                    if (unlink($filePath)) {
                        echo "Image deleted successfully.";
                        return true;
                    } else {
                        echo "Error deleting image file.";
                        return false;
                    }
                } else {
                    echo "Image file not found.";
                    return false;
                }
            } else {
                echo "Error executing deletion statement: " . $stmt->error;
                return false;
            }
        } else {
            echo "Invalid request.";
            return false;
        }
    }
}
?>
