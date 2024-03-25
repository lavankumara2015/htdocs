<?php include("./components/arrays.php") ?>


<div  class="our-services-card-container">

<?php foreach($ourServices as $details): ?>
<div class="our-services-card">
    <img src="<?php echo $details[0];?>" alt="<?php echo $details[1];?>"/>
    <h1><?php echo $details[1];?></h1>
    <p><?php echo $details[2];?></p>
</div>
<?php endforeach;?>
</div>