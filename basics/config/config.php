<?php

$var = [
    'database' => [
        'host' => '127.0.0.1',
        'port' => 3306,
        'username' => 'db_user',
        'password' => 'P2-LKjq9324[$32',
        'name' => 'my_database',
    ],

    'redis' => [
        'host' => 'localhost',
        'port' => 6379,
        'password' => 'redis_password',
    ],

    'facebook_api' => [
        'app_id' => '123456789012345',
        'app_secret' => 'abc123def456ghi789jkl012',
        'redirect_uri' => 'https://your-website.com/facebook-callback',
    ],

    'smtp' => [
        'host' => 'smtp.mailtrap.io',
        'port' => 2525,
        'username' => 'alloe284',
        'password' => 'Eo2e23p9io',
        'encryption' => 'tls',
    ],

    'aws' => [
        'key' => 'AKIAEXAMPLE12345',
        'secret' => 'wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY',
        'region' => 'us-east-1',
    ],

    'app' => [
        'debug' => true,
        'timezone' => 'UTC',
        'locale' => 'en_US',
    ],
];

var_dump($var);