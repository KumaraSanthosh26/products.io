<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('America/Los_Angeles');

// Host Name
$server = 'kumarasanthosh.mysql.polardb.ap-south-1.rds.aliyuncs.com:3306';

// Database Name
$dbname = 'newdb';

// Database Username
$username = 'kumar123';

// Database Password
$password = 'Kumar123@';

// Defining base url
define("BASE_URL", "");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$server};dbname={$dbname}", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}