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
      align-items: flex-start;
      justify-content: space-between;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    .content img {
      max-width: 40%; 
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }
    .content p {
      width: 55%;
      font-size: 1.1rem;
      line-height: 1.5;
      color: white;
      margin-left: 20px;
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
    <h2>Behavioral Monitoring</h2>
  </header>

  <main1>
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="signatureBaseDetection.php">Signature-Based Detection</a></li>
      <li><a href="heuristicAnalysis.php">Heuristic Analysis</a></li>
      <li><a href="behavioralMOnitoring.php">Behavioral Monitoring</a></li>
      <li><a href="sandboxing.php">Sandboxing</a></li>
      <li><a href="removalTechniques.php">Removal Techniques</a></li>
    </ul>
  </nav>
  <div class="content">
      <img src="bdm.jpg" alt="" width="50%" height="auto">
      <p> Monitoring the behavior of programs in real-time helps detect malware based on their actions.
         If a program starts performing actions commonly associated with malware (e.g., modifying system settings or accessing sensitive data), 
         the antivirus may flag it.</p>
      <p>In cybersecurity, behavioral monitoring involves tracking and analyzing the actions and interactions of users or systems to detect unusual or potentially malicious activities.
         By establishing a baseline of "normal" behavior, deviations or aberrations from this baseline can be flagged as potential security threats, such as unauthorized access or malware activity</p>
    <p>Behavioral monitoring often involves the use of technology, such as monitoring software, sensors, or data analytics tools, to collect and process large amounts of data. 
        Machine learning and AI algorithms can also be applied to identify patterns and anomalies within this data more effectively.</p>
  </div>
  </main>

  <footer>
    <p>&copy; 2023 Antivirus Techniques</p>
  </footer>
</body>
</html>
