<?php

// Host Name
$dbhost = "localhost";

// Database Name
$dbname = "dubaiyt";

// Database Username
$dbuser = "root";

// Database Password
$dbpass = "";

// Defining base url
define("BASE_URL", "http://localhost/27thm/");


try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $excepiton->getMessage();
}
?>