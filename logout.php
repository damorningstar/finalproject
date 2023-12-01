<?php
session_start();

if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout Confirmation</title>
</head>
<body>
    <script>
        function confirmLogout() {
            var answer = confirm("Are you sure you want to logout?");
            if (answer) {
                window.location = "logout.php?confirm=yes";
            } else {
                window.location = "dashboard.php";
            }
        }
        confirmLogout();
    </script>
    
</body>
</html>
