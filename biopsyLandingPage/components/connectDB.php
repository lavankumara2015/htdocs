<?php

$dbhost = $servername = "localhost";
$dbuser = $username = "root"; 
$dbpass = $password = ""; 
$dbname = $database = "cion"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

