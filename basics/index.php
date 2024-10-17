<?php

setcookie('session', md5('session'), 0, '', '', false, false);

header('SERVER: 2.4.59', true);
header('X-POWERED-BY: PHP 8.1.30', true);