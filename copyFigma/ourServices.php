<?php include("./arrays.php")?>

<div class="grid-container">
    <?php foreach ($ourServices as $item): ?>
        <div class="card-1">
            <img src="<?php echo $item[0]; ?>" alt="Icon">
            <h4 style="margin-top: 15px;"><?php echo $item[1]; ?></h4>
        </div>
    <?php endforeach; ?>
</div>
