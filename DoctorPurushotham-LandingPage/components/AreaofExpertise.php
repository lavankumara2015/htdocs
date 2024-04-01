

<?php
$sql = "SELECT * FROM expertisedoctor";
$result = $conn->query($sql);
?>

<h1 class="surgical-oncologist">Surgical Oncologist <span>Dr. Purushotham Area of Expertise</span></h1>
<div class="surgical__oncologist__container">
    <?php foreach($result as $details) { ?>
        <div class="surgical__oncologist__cards" >
            <img src="<?php echo $details['image_url']; ?>" alt="surgery-image">
            <h1><?php echo $details['surgeryname']; ?></h1>
        </div>
    <?php
 } ?>
</div>

