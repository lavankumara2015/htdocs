<?php include("./Components/arrays.php")?>

<!-- large devices testimonials -->
<div id="testimonial-carousel" class="carousel slide md-device-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php for ($i = 0; $i < count($testimonials); $i += 2): ?>
            <div class="carousel-item <?php echo $i === 0 ? 'active' : '' ?>">
                <div class="row d-flex flex-row flex-wrap justify-content-center align-items-center">
                    <?php for ($j = $i; $j < min($i + 2, count($testimonials)); $j++): ?>
                        <div class="col-md-5 mx-1">
                            <div class="testimonial-single-card" style="background-color: #F0D0DD;">
                                <p>"<?php echo $testimonials[$j][0]; ?>"</p>
                                <hr id="carousel-hr">
                                <span><?php echo $testimonials[$j][1]; ?></span>
                                <span class="rating"><img src="../assests/starsbagimage.png" alert="stars" /></span>
                                <small class="Testimonial_small_hyd"> Hyderabad </small>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- small devices testimonials -->
<div class="carousel-main d-md-none">
    <div id="carouselExampleAutoplaying" style="background-color: #F0D0DD; border-radius: 0.23rem;" class="carousel slide px-5 py-5 d-md-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($testimonials as $index => $testimonial) : ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <p class="">"<?php echo $testimonial[0]; ?>"</p>
                    <hr id="carousel-hr">
                    <div style="width: 90%;" class="d-flex flex-row justify-content-between align-items-center">
                        <span><?php echo $testimonial[1]; ?></span>
                        <span class="rating"><?php echo $testimonial[2]; ?></span>
                   
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

