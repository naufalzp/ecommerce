<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ecom";

// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?>