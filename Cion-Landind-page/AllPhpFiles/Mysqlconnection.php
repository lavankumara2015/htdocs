<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "phpmyadmin"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $scan_type = htmlspecialchars($_POST['scan']);

    
    if (empty($errors)) {
        // SQL statement to insert data into MySQL database
        $sql = "INSERT INTO scans (name, phone_number, scan_type) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $phone, $scan_type);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "<h1>Booking Successful</h1>";
            echo "<h1>$name</h2>";
            echo "<h1>$phone</h2>";
            echo "<h1>$scan_type</h2>";
        } else {
            echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
        }
        $stmt->close();
        $conn->close();
    }
}
?>


