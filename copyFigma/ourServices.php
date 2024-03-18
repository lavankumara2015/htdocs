

<div class="grid-container">
    <?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "phpmyadmin"; 

    
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT image_path, service_name FROM our_services";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="card-1">
                <img src="<?php echo $row['image_path']; ?>" alt="Icon">
                <h4 style="margin-top: 15px;"><?php echo $row['service_name']; ?></h4>
            </div>
            <?php
        }
    } else {
        echo "No data found";
    }

    $conn->close();
    ?>
</div>