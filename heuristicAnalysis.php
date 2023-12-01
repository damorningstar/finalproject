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
    <h2>Heuristic Analysis</h2>
  </header>

  <main>
    <nav>
      <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="signatureBaseDetection.php">Signature-Based Detection</a></li>
      <li><a href="heuristicAnalysis.php">Heuristic Analysis</a></li>
      <li><a href="behavioralMOnitoring.php">Behavioral Monitoring</a></li>
      <li><a href="sandboxing.php">Sandboxing</a></li>
      <li><a href="removalTechniques.php">Removal Techniques</a></li>
    </ul>
      </ul>
    </nav>
    <div class="content">
      <img src="heu.png" alt="" width="50%" height="auto">
      <p>Antivirus software employs heuristic algorithms to identify suspicious behavior in programs. 
        It looks for traits commonly found in malware, like code that tries to hide itself or replicate,
        and flags files showing these behaviors</p>
      <p>Heuristic analysis refers to a problem-solving approach that uses practical methods or rules to find a solution.
        It involves using experience-based techniques to solve problems more quickly when classic methods are impractical or too slow.</p>
      <p>In computer science and software engineering, heuristic analysis is commonly used in debugging, optimization, and decision-making processes.
        It involves creating rules or algorithms that might not guarantee an optimal solution but aim to find a good enough solution within a reasonable time frame.</p>
    </div>
  </main>

  <footer>
    <p>&copy; 2023 Antivirus Techniques</p>
  </footer>
</body>
</html>
