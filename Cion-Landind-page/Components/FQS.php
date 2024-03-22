<?php include("./Components/arrays.php") ?>
<div class="FAQ-container-accordions">
    <div class="accordion accordion-flush" id="accordionFlushExample1">
        <?php for ($index = 0; $index < 5; $index++) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $index; ?>">
                        <?php echo $carouselItems[$index]['question']; ?>
                    </button>
                </h2>
                <div id="flush-collapse<?php echo $index; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                    <div class="accordion-body"><?php echo $carouselItems[$index]['answer']; ?></div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample2">
        <?php for ($index = 5; $index < count($carouselItems); $index++) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $index; ?>">
                        <?php echo $carouselItems[$index]['question']; ?>
                    </button>
                </h2>
                <div id="flush-collapse<?php echo $index; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body"><?php echo $carouselItems[$index]['answer']; ?></div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
