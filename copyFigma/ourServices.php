<?php
        $arr = [
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"]
        ];
        ?>
         <div class="grid-container">
        <?php foreach ($arr as $item): ?>
            <div class="card-1">
                <img src="<?php echo $item[0]; ?>" alt="Icon">
                <h4 style="margin-top: 15px;"><?php echo $item[1]; ?></h4>
            </div>
        <?php endforeach; ?>