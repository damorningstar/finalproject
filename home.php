<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Antivirus Techniques</title>
  <style>
    body {
     font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     margin: 0;
     padding: 0;
     background-image: url('dashboard.gif');
     background-size: cover;
     background-repeat: no-repeat;
     background-attachment: fixed;
     display: flex;
     justify-content: center;
     align-items: center;
     height: 100vh;
     }

header {
  background-color: rgba(255, 255, 255, 0.9);
  padding: 20px;
  text-align: center;
  position: fixed;
  width: 100%;
  height: 60px;
  top: 0;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

header .right-links {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 20px;
}

header .right-links a {
  text-decoration: none;
  color: #333;
  padding: 5px 10px;
  border-radius: 5px;
  background-color: #CBA181;
  transition: background-color 0.3s ease;
  margin-left: 10px;
}

header .right-links a:hover {
  background-color: #ccc;
}

h2 {
  margin: 0;
  font-size: 24px;
  color: #333;
}

main {
  padding-top: 120px;
}

nav ul {
  list-style: none;
  padding: 0;
  text-align: center;
  margin-top: 20px;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
  padding: 8px 12px;
  border-radius: 5px;
  background-color: #CBA181;
  transition: background-color 0.3s ease;
}

nav ul li a:hover {
  background-color: #ccc;
}

section {
  margin-bottom: 30px;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0;
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 30px;
}
@keyframes pulse {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.05);
      }
      100% {
        transform: scale(1);
      }
    }

    h2 {
      margin: 0;
      font-size: 25px;
      color: #333;
      text-align: center;
      animation: pulse 2s infinite;
    }

  </style>
  <script>
     const username = localStorage.getItem('username');
  </script>
</head>
<body>
  <header>
    <h2>Antivirus programs use various techniques to detect and remove malware </h2>
    <div class="right-links">
      <a href="manageAccount.php">Manage Account</a>
      <a href="logout.php">Logout</a>
    </div>
</header>
  <main>
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="signatureBaseDetection.php">Signature-Based Detection</a></li>
      <li><a href="heuristicAnalysis.php">Heuristic Analysis</a></li>
      <li><a href="behavioralMonitoring.php">Behavioral Monitoring</a></li>
      <li><a href="sandboxing.php">Sandboxing</a></li>
      <li><a href="removalTechniques.php">Removal Techniques</a></li>
    </ul>
  </nav>
  </main>

  <footer>
    <p>&copy; 2023 Antivirus Techniques</p>
  </footer>
  
</body>
</html>
