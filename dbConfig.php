<?php 
// // Database configuration
// $dbHost = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "map";

// // Create database connection
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// // Check connection
// // if ($db->connect_error) {
// // 	die("Connection failed: ". $db->connect_error);
// // }
$databaseHost = 'localhost';
$databaseName = 'map';
$databaseUsername = 'root';
$databasePassword = '';

$db = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 ?>