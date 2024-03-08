<?php
        $arr = [
            ["whole Body Analog Pet", "Rs.18000/-", "Rs.14999/-"],
            ["Whole Body Digital  Pet", "Rs.25000/-", "Rs.20999/-"],
            ["PSMA Pet  Scan ", "Rs.35000/-", "Rs.31000/-"],
            ["Fdopa Pet Scan  ", "Rs.35000/-", "Rs.31000/-"],
            ["Dotatate Pet  Scan", "Rs.35000/-", "Rs.31000/-"],
            ["Dotanoc Pet  Scan", "Rs.35000/-", "Rs.31000/-"]
        ];
        ?>

        <div class="container-types">
            <?php foreach ($arr as $details) : ?>
                <div class="card">
                    <h3><?php echo $details[0]; ?></h3>
                <div class="card-inside">
                    <span style="text-decoration: line-through; color: #BEBBBB; "> <?php echo $details[1]; ?></span>
                    <span style="color:#802A8F ; font: size 1rem;"> <?php echo $details[2]; ?></span></div>
                    <hr>
                    <button>Book now</button>
                </div>
            <?php endforeach; ?>