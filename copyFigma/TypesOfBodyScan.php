<?php include("./arrays.php")?>










<div class="container-types">
    <?php foreach ($arr as $details) : ?>
        <div class="card">
            <h3><?php echo $details[0]; ?></h3>
            <div class="card-inside">
                <span style="text-decoration: line-through; color: #635454; "><?php echo $details[1]; ?></span>
                <span style="color:#802A8F;"><?php echo $details[2]; ?></span>
                <hr>
            </div>
            <button><a href="#back-pink" style="text-decoration: none; color: white">Book now</a></button>
        </div>
    <?php endforeach; ?>
</div>
