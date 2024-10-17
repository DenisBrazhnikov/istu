<?php

setcookie('session', md5('session'), 0, '', '', false, false);

header('X-SERVER: 2.4.59');
header('X-POWERED-BY: PHP 8.1.30');

phpinfo();

//echo 2/0;

echo '
<html lang="en">
<head>
    <title>Test calculator</title>
</head>

<body>
    <form method="post">
    
    </form>
</body>
</html>
';