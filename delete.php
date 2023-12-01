<?php
include 'db_connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        
        $username = $_POST['username'];
        echo "Received username: " . $username; 
        $sql = "DELETE FROM tbluser WHERE username = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);

        if ($stmt->execute()) {
            echo "User deleted successfully";
        } else {
            echo "Error deleting user: " . $stmt->error;
        }

        $stmt->close(); 
    } else {
        echo "Username is required";
    }
} else {
    echo "Invalid request method";
}

$conn->close(); 
?>
