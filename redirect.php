

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NAME = $_POST["name"];
    echo $NAME;
}
?>
