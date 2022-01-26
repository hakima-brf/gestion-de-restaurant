<?php

session_start();
//create constates to store 
define("SITEURL",'https://localhost/food');
define('LOCALHOST', "localhost");
define('DB_USERNAME', "root");
define('NB_PASSWORD', "");
define('DB_NAME', "food");

$conn = mysqli_connect('LOCALHOST', 'DB_USERNAME', 'NB_PASSWORD') or die(mysqli_error);
$sd_select = mysqli_select_db($conn, 'DB_NAME') or die (mysqli_error);
?>