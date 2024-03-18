<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "phpmyadmin"; // Change this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $scan_type = mysqli_real_escape_string($conn, $_POST['scan']);

    //SQL statement to insert data into MySQL
    $sql = "INSERT INTO scans (name, phone_number, scan_type) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("sss", $name, $phone, $scan_type);

    // Execute query
    if ($stmt->execute()) {
        echo "<h1>Booking Successful</h1>";
    } else {
        echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
    $conn->close();
}
?>
