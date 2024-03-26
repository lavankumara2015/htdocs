<?php 
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "cionlandingpage2"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $location = htmlspecialchars($_POST['location']);
    $message = htmlspecialchars($_POST['message']);


    if (empty($errors)) {
        // SQL statement to insert data into MySQL database
        $sql = "INSERT INTO leadcontacts (name, phone, email, location, message) VALUES (?, ?, ? ,? ,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $phone, $email, $location, $message);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "<h1>Thank you For Your Booking</h1>";
            echo "<h1>name : $name</h2>";
            echo "<h1>phone : $phone</h2>";
            echo "<h1>email : $email</h2>";
            echo "<h1>location : $location</h1>";
            echo "<h1>message : $message</h1>";

        } else {
            echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
        }
        $stmt->close();
        $conn->close();
    }
}
?>
