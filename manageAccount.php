<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update/Delete User</title>
    <style>
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f7f7f7;
  color: #333;
}
form {
  max-width: 400px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h2 {
  margin-top: 0;
  margin-bottom: 20px;
  text-align: center;
  color: #1e88e5;
}
label {
  display: block;
  margin-bottom: 5px;
  color: #333;
}

input[type="text"] {
  width: 90%;
  padding: 8px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
input[type="submit"] {
  background-color: #1e88e5;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #1565c0;
}

    </style>
</head>
<body>
    <form action="update.php" method="post">
        <h2>Update User</h2>
        <label for="username">Username:</label><br>
        <input type="text" name="username"><br>
        <label for="fullname">Fullname:</label><br>
        <input type="text" name="fullname"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <form action="delete.php" method="post">
        <h2>Delete User</h2>
        <label for="username">Username:</label><br>
        <input type="text" name="username"><br><br>
        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>
