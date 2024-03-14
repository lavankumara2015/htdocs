<?php
$arr = [
    ["assests\Group 35776.png", "Cancer Sugeries"],
            ["assests\Group 35820.png", "Chemotherapy"],
            ["assests\Group 35779.png", "Immunotherapy"],
            ["assests\Group 35819.png", "Radiation Oncology"],
            ["assests\Group 35781.png", "Biopsy"],
            ["assests\Group 35782.png", "Breast&Oral Screenings"],
            ["assests\Group 35783.png", "MRI Scans"],
            ["assests\Group 35784.png", "Bone Scans"]
        ];
?>

<div class="grid-container">
    <?php foreach ($arr as $item): ?>
        <div class="card-1">
            <img src="<?php echo $item[0]; ?>" alt="Icon">
            <h4 style="margin-top: 15px;"><?php echo $item[1]; ?></h4>
        </div>
    <?php endforeach; ?>
</div>
