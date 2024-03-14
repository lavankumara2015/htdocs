<?php
$arr = [
    ["Whole Body Analog Pet CT scan", "Rs.18000/-", "Rs.14999/-"],
    ["Whole Body Digital Pet CT Scan", "Rs.25000/-", "Rs.20999/-"],
    ["PSMA Pet CT Scan", "Rs.35000/-", "Rs.31000/-"],
    ["Fdopa Pet CT Scan", "Rs.35000/-", "Rs.31000/-"],
    ["Dotatate Pet CT Scan", "Rs.35000/-", "Rs.31000/-"],
    ["Dotanoc Pet CT Scan", "Rs.35000/-", "Rs.31000/-"]
];
?>

<div class="container-types">
    <?php foreach ($arr as $details) : ?>
        <div class="card">
            <h3><?php echo $details[0]; ?></h3>
            <div class="card-inside">
                <span style="text-decoration: line-through; color: #BEBBBB; "><?php echo $details[1]; ?></span>
                <span style="color:#802A8F;"><?php echo $details[2]; ?></span>
                <hr>
            </div>
            <button>Book now</button>
        </div>
    <?php endforeach; ?>
</div>
