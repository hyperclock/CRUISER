<?php

// 0 = off, 1 = on
// set to off for production
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$db['db_host'] = "localhost";
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'cruiser_db';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
