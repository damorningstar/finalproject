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
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    }
    .content img {
      width: 48%;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px; 
      display: block; 
      margin: 0 auto; 
    }
    .text-content {
      width: 100%;
      color: #444;
      font-size: 1.1rem;
      line-height: 1.6;
      padding: 20px;
      background-color: #eac9c1;
      border-radius: 8px;
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
    <h2>SandBoxing</h2>
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
    </nav>
    <div class="content">
      <img src="sandboxing.png" alt="" width="48%" height="auto">
      <div class="text-content">
        <p>Sandboxing is a security mechanism used in software development and cybersecurity to isolate potentially harmful code or untrusted programs from the rest of the system. 
          It creates a contained environment (a "sandbox") where unverified or suspicious software can run, allowing it to be tested or executed without posing a risk to the larger system.</p>
        <h2>Key aspects of sandboxing include:</h2>
        <p>Isolation: Sandbox environments are isolated from the main system, preventing any malicious activity or unintended consequences from affecting the host system.</p>
        <p>Testing and Analysis: Sandboxes provide a safe space to test new or unverified software. 
          This is particularly important in cybersecurity, where potentially harmful files or programs can be executed in a controlled environment for analysis without risking damage to the actual system.</p>
        <p>Controlled Access: Sandboxes often restrict access to resources outside the contained environment, such as limiting network access or file system permissions.
           This prevents malware or suspicious programs from spreading or accessing sensitive data.</p>
        <p>Behavior Monitoring: Sandboxing may involve monitoring the behavior of the software running within it.
           Any unusual or suspicious behavior can be flagged for further analysis or containment.</p>
        <p>Dynamic Analysis: Security researchers and analysts use sandboxes to conduct dynamic analysis of malware.
           By observing how malware behaves within the sandbox, analysts can understand its capabilities, intentions, and potential impact.</p>  
        <p>Sandboxing is utilized in various contexts, including web browsers, email systems, and antivirus programs.
           For instance, web browsers often use sandboxing to isolate individual tabs or processes, ensuring that if one tab encounters malicious code, it won't affect the entire browser or system.</p>
    </div>
  </main>

  <footer>
    <p>&copy; 2023 Antivirus Techniques</p>
  </footer>
</body>
</html>
