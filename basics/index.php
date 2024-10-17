<?php

setcookie('session', md5('session'), 0, '', '', false, false);

header('X-SERVER: 2.4.59');
header('X-POWERED-BY: PHP 8.1.30');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$result = '';

if(isset($_POST['a']) && isset($_POST['b'])) {
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $result = $a/$b;
}

echo '
<html lang="en">
<head>
    <title>Test calculator</title>
</head>

<body>
    <h2 id="heading">Calc (Division operation)</h2>
    <br>
    <form method="post">
        <input type="text" placeholder="Value 1" name="a">
        <br>
        <input type="text" placeholder="Value 1" name="b">
        <br>
        <button type="submit">Calculate</button>
        <br>
        <br>
        Result: '. $result .'
    </form>
    
    <script>
    // JavaScript to fetch JSON and set the H2 color
    fetch("https://plankton-app-mv8n2.ondigitalocean.app/basics/config/styles.json")
      .then(response => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.json();
      })
      .then(data => {
        const h2Tag = document.getElementById("heading");
        h2Tag.style.color = data.h2Color;
      })
      .catch(error => console.error("Error fetching the JSON:", error));
  </script>
</body>
</html>
';