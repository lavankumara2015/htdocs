

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

$sql = "SELECT title, price1, price2 FROM typesofbodyscan";
$result = $conn->query($sql);

?>
<div class="container-types">
    <?php

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
    ?>
            <div class="card">
            <h3><?php echo $row["title"]; ?></h3>
            <div class="card-inside">
            <span style="text-decoration: line-through; color: #635454;"><?php echo $row["price1"]; ?></span>
            <span style="color:#802A8F;"><?php echo $row["price2"]; ?></span>
             <hr>
            </div>
            <button>Book now</button>
            </div>
    <?php
        }
    } else {
        echo "No data found";
    }
    $conn->close();
    ?>