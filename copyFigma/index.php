<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma Copy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- nav bar -->
    <nav id="nav">
        <div>
            <img src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="cion logo" />
            <button id="a1">Contactus</button>
        </div>
    </nav>
    <!-- section 1  -->
    <section>
        <div class="banner-first-container d-flex flex-column  justify-content-center align-items-center">
            <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
                <span class="Rs10999">Rs.10999/-</span>
            </h1>
            <span id="p-tag">
                <img src="assests\Group 35811.png" alt="" /><span> One Free Oncology Consultation</span>
            </span>
            <span id="p-tag">
                <img src="assests\Group 35815.png" alt="" /> <span> CION Assured Oncologist Diagnostics
                </span>
            </span>
        </div>
        <div id="inputFiled" class="d-none  d-md-inline ">
            <form method="POST" action="redirect.php">
                <h1 style="color: black;">Book Your Pet Scan </br>Now! </h1>
                <input type="name" name="name" placeholder="Name" />
                <input type="phone" name="phone" placeholder="Phone number " />
                <select id="cars" name="scan">
                    <option value="select">Select type of Scan</option>
                    <option value="Whole Body Analog Pet CT Scan">Whole Body Analog Pet CT Scan</option>
                    <option value="Whole Body Digital Pet CT Scan ">Whole Body Digital Pet CT Scan </option>
                    <option value="PSMA Pet CT Scan">PSMA Pet CT Scan</option>
                    <option value="Fdopa Pet CT Scan">Fdopa Pet CT Scan</option>
                    <option value="Dotatate Pet CT Scan">Dotatate Pet CT Scan</option>
                    <option value="Dotanoc Pet CT Scan">Dotanoc Pet CT Scan</option>
                </select>
                <p class="text-center"> <button type="submit" class="class-booknow">BookNow</button></p>
            </form>
        </div>
    </section>

    <!--small devices form -->
    <div id="back-pink " style=" background-color : rgb(240, 208, 221);" class="pt-2 pb-2 d-flex  flex-column  justify-content-center align-items-center  text-center   d-md-none">
        <div id="inputFiled">
            <form method="POST" action="redirect.php">
                <h1 style="font-weight: 700;">Book Your Pet Scan </br>Now! </h1>
                <input type="name" name="name" placeholder="Name" /> <br>
                <input type="phone" name="phone" placeholder="Phone number " /><br>
                <select id="cars" name="scan">
                    <option value="select">Select type of Scan</option>
                    <option value="Whole Body Analog Pet CT Scan">Whole Body Analog Pet CT Scan</option>
                    <option value="Whole Body Digital Pet CT Scan ">Whole Body Digital Pet CT Scan </option>
                    <option value="PSMA Pet CT Scan">PSMA Pet CT Scan</option>
                    <option value="Fdopa Pet CT Scan">Fdopa Pet CT Scan</option>
                    <option value="Dotatate Pet CT Scan">Dotatate Pet CT Scan</option>
                    <option value="Dotanoc Pet CT Scan">Dotanoc Pet CT Scan</option>
                </select>
                <p class="text-center"> <button type="submit" class="btn-booknow">Book Now</button></p>
            </form>
        </div>
    </div>

    <!-- discount section-->
    <ul class="container-ass  ">
        <li> <img src="assests\Group 35729.png" alt="" />
            <p>Upto 40% Discount</p>
        </li>
        <li> <img src="assests\Group 35729 (1).png" alt="" />
            <p>Same Day Reports</p>
        </li>
        <li> <img src="assests\Group 35729 (2).png" alt="" />
            <p>100%Accuracy Assured </p>
        </li>
        <li> <img src="assests\Group 35729 (3).png" alt="" />
            <p>Free Doctor Consultation</p>
        </li>
    </ul></br>

    <!-- scan fee -->

    <div class="container-scan-fee"></br>
        <h2 class=" text-center" style="font-weight: 700;">Types of scans We do</h2>
        <?php include("./TypesOfBodyScan.php") ?>
    </div>
    </div>
    <!-- Free now ! -->
    
    <div class="Free-now">
        <div>
            <img src="assests\Ellipse 3.png" alt="" />
        </div>
        <div class="main-Free">
            <h2 class=" text-white" id="Understanding">Don’t have a prescription?</br>Consult Our Oncologist <strong>FREE</strong> now!</h2>
            <button>
                <span>BOOK APPOINTMENT</span>
            </button>
        </div>
    </div></br>
    <!-- Testimonials -->
    <h2 style="text-align: center; font-weight: 700;">Testimonials</h2>
    <div class="carousel-main">
        <div id="carouselExampleAutoplaying" style="background-color: #F0D0DD;" class="carousel slide  px-5 py-5 d-md-none" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
                    <hr style="border: 1px solid rgb(176, 169, 166) ;">
                    <span>Priya K.</span>
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                </div>
                <div class="carousel-item">
                    <p>Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
                    <hr style="border: 1px solid rgb(176, 169, 166) ;">
                    <span>Arjun.S</span>
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                </div>
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

    <div class="testimonial-card d-none  d-md-flex flex-wrap justify-content-center align-items-center">
        <div style="background-color: #F0D0DD;" class="testimonial-single-card">
            <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>

            <span>Priya K.</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
        </div>
        <div style="background-color: #F0D0DD;" class="testimonial-single-card">
            <p>Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>

            <span>Arjun.S</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
        </div>
    </div>
    <div style="background-color: rgba(244, 244, 244, 1); padding: 1.5rem 0 2rem 0;">
        <h2 style="text-align: center;">Guidelines for PET-CT scans</h2></br>
        <div class="guidelines">
            <div class="guideline-card">
                <img src="assests\Group 35735.png" alt="">
                </br>
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
            <div class="guideline-card">
                <img src="assests\Group 35735 (1).png" alt="">
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
            <div class="guideline-card">
                <img src="assests\Group 35822.png" alt="">
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
        </div>
    </div>
    <ul id="ul-li">
        <li><img src="assests\Group 35751.png" alt="location">
            <h6> Jubilee Hills</h6>
        </li>
        <li><img src="assests\Group 35751.png" alt="location">
            <h6> Narayanaguda</h6>
        </li>
        <li><img src="assests\Group 35751.png" alt="location">
            <h6> Panjagutta</h6>
        </li>
        <li><img src="assests\Group 35751.png" alt="location">
            <h6> Himayathnagar</h6>
        </li>
    </ul></br>
    <div class=" text-center">
        <h2>Understanding PET-CT Scans: </h2>
        <h2>Importance, Need, and Cost in </h2>
        <h2> India</h2>
    </div> </br>
    <div class="pet-ct">
        <div> <img src="assests\image 17.png" alt="" /></div>
        <div style="border-style: black;  " class="  bg-white border-1  p-0 ">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" style="background-color: pink;" id="flush-headingOne">
                            <button class="accordion-button" type="button"  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></br>

    <!-- our-services section -->

    <div class="our-services"></br>
        <div class="text-center  font-bold">
            <h2>Our-services</h2>
        </div>
        <?php include('./ourServices.php') ?>
    </div>


    <!-- FAQS Container -->
    <div class=" pt-5 pb-5 bg-white d-flex flex-column  justify-content-center  align-items-center ">
        <h2 style="font-size: 1rem;" class="   ">FAQS</h2>

        <div class="faq-inner-container align-self-stretch d-flex flex-wrap">
                    <?php
                    $myLs = array(
                        array("id" => 1, "title" => "What's the average cost of a PET CT scan in Vizag?", "text" => "The average cost of a PET CT scan in Vizag typically ranges between 20,000 to 30,000 rupees. However, at Cion, we are committed to making cancer diagnostics and treatment both accessible and affordable. That's why we offer it at a special price of just 15,000 rupees."),
                        array("id" => 2, "title" => "Where can I get a pet scan in vizag ?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                        array("id" => 3, "title" => "How much does a PET scan cost in vizag?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                        array("id" => 4, "title" => "Is there a Whole Body PET CT option?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                        array("id" => 5, "title" => "Are there PET scan facilities near me?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                        array("id" => 6, "title" => "Where can I get a pet scan in vizag ?", "text" => "Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages."),
                    );
                    foreach ($myLs as $data) :
                        ?>
                        <div class="accordion my-2" id="accordionExample<?php echo $data['id']; ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo<?php echo $data['id']; ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <?php echo $data['title']; ?>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo<?php echo $data['id']; ?>" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <code><?php echo $data['text']; ?></code>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach;  ?>
                </div>






 
  
    </div>
    <!-- <footer>
        <h3 style="padding: 1rem;">@ Ciphar oncology pvt Ltd</h3>
    </footer> -->
</body>

</html>