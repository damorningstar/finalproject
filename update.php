<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$Username = $_POST['username'];
$Fullname = $_POST['fullname'];
$Email = $_POST['email'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "finalproject";

$conn = new mysqli($servername,$username,$password,$database);

if ($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}
$sql = "UPDATE tbluser SET fullname=?,email=? WHERE username=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss",$Fullname,$Email,$Username);

if ($stmt->execute()){
    echo "User updated successfully";
} else {
    echo "Error updating user: " . $conn->error;
}

$stmt->close();
$conn->close();
}
?>
