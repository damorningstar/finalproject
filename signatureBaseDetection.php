<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #e69597;
      color: #444;
      line-height: 1.6;
    }
    header {
      background-color: #eac4d5;
      padding: 20px;
      text-align: center;
      color: #fff;
    }
    h2 {
      margin: 0;
      font-size: 2.5rem;
    }
    main {
      padding: 20px;
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
      background-color: #eac9c1;
      transition: background-color 0.3s ease;
    }
    nav ul li a:hover {
      background-color: #ffc2d1;
      color: #fff;
    }
    .content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    }
    .content img {
      max-width: 40%;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }
    .content img:last-child {
      max-width: 60%; 
    }
    .content p {
      width: 55%;
      font-size: 1.1rem;
      margin-bottom: 15px;
      line-height: 1.5;
      color: white;
    }
    footer {
      background-color: #ceb5b7;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
      height: 25px;
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
      font-size: 30px;
      color: #fff;
      text-align: center;
      animation: pulse 2s infinite;
    }

  </style>
</head>
<body>
  <header>
    <h2>Signature-Based Detection</h2>
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
    <div class="content">
      <img src="signature.gif" alt="" width="100%" height="auto">
      <img src="sbd.jpg" alt="" width="100%" height="auto">
      <p>Signature-based detection involves comparing files or code within a system against a database of known malware signatures. 
        When a file's signature matches a signature in the database, it is flagged as malware. This method is effective against 
        known threats but can be less effective against new or unknown malware.</p>
      <p>Antivirus software regularly updates its signature database to include new malware signatures and enhance detection capabilities.</p>
    </div>
  </main>

  <footer>
    <p>&copy; 2023 Antivirus Techniques</p>
  </footer>
</body>
</html>
