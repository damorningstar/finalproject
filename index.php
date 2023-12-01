<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up & Log In</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('login.gif');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 500px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    button {
      margin: 8px 0;
      padding: 8px;
      width: 90%;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    button {
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    a {
      text-decoration: none;
      color: #007bff;
    }

    a:hover {
      text-decoration: underline;
    }

    .hidden {
      display: none;
    }
    .onclick{
      color:black;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="login.php" method="post" class="form">
      <h3>Login</h3>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="signin">Login</button>
    </form>
    <p> Don't have an account? <a href="signup.php">Sign up </a> </p>
  </div>
</body>
</html>
