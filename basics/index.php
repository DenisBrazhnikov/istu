<?php

setcookie('session', md5('session'), 0, '', '', false, false);

header('X-SERVER: 2.4.59');
header('X-POWERED-BY: PHP 8.1.30');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
    <h2>Calc (Division operation)</h2>
    <form method="post">
        <input type="text" placeholder="Value 1" name="a">
        <br>
        <input type="text" placeholder="Value 1" name="b">
        <br>
        <button type="submit">Calculate</button>
        <br>
        <br>
        Result: '. isset($result) ? $result : 'No result yet' .'
    </form>
</body>
</html>
';