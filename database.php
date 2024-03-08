
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "phpmyadmin";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT title, url FROM cion'; 

$result = mysqli_query($conn, $sql);

// print_r($result);

if ($result) {
    $details = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    // print_r($details);
} else {
    echo "Error: ". mysqli_error($conn);
}

// mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<h1 class=" text-center text-4xl  mt-10" style="color: #A65FA2;"> Types of Biopsy We Treat </h1></br>
<div class="flex flex-wrap  justify-center items-center flex-row gap-10">
    <?php foreach ($details as $result): ?>
        <div class="">
            
            <img class=" w-20 h-15" src="<?php echo htmlspecialchars($result['url']); ?>" alt="Image">
            <p class="text-sm" ><?php echo htmlspecialchars($result['title']); ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>