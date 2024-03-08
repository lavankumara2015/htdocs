<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma Copy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- nav bar -->

    <nav id="nav">
        <div>
            <img src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="cion logo" />
            <a href="https://www.cioncancerclinics.com" id="a1">Contact us</a>

        </div>
    </nav>

    <!-- section 1  -->

    <section>
        <div>
            <img class="main-img" src="assests\Group 35809.jpg" alt="Banner Image" />
            </br>
            <div id="inputFiled">
                <form method="POST" action="redirect.php">
                    <h1 style="color: black;">Book Your Pet Scan </h1>
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
                    </select></br></br>
                    <p class="text-center"> <button type="submit">Submit</button></p>

                </form>
            </div>
        </div>
    </section></br></br>

    <!-- discount section-->

    <ul class="container">
        <li> <img src="assests\Group 35729.png" alt="" />
            <p>Upto 40% Discount</p>
        </li>
        <li> <img src="assests\Group 35729 (1).png" alt="" />
            <p>Same Day Reports</p>
        </li>
        <li> <img src="assests\Group 35729 (2).png" alt="" />
            <p>100% Accuracy Assured </p>
        </li>
        <li> <img src="assests\Group 35729 (3).png" alt="" />
            <p>Free Doctor Consultation</p>
        </li>
    </ul></br>

    <!-- scan fee -->
    <div class="container-scan-fee"></br>
        <h2 class=" text-center">Types of scans We do</h2>
        <?php include("./TypesOfBodyScan.php") ?>
        </div></div>
    <!-- Free now ! -->
    <div class="Free-now">
        <div>
            <img src="assests\Ellipse 3.png" alt="" />
        </div>
        <div class="main-Free">
            <h2 class=" text-white"  id="Understanding">Don’t have a prescription?</br>Consult Our Oncologist FREE now!</h2>
            <button>BOOK APPOINTMENT</button>
        </div>

    </div></br>

    <!-- Testimonials -->
    <h2 style="text-align: center;">Testimonials</h2>

    <div class="testimonials-container">
        <div class="testimonial-card">
            <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
            <hr style="border: 1px solid rgb(176, 169, 166) ;">
            <span>Priya K.</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
        </div>

        <div class="testimonial-card">
            <p>Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
            <hr style="border: 1px solid rgb(176, 169, 166) ;">
            <span>Arjun.S</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
        </div>
    </div>

    <div style="background-color: rgb(217, 217, 219); padding: 1.5rem;">
        <h2 style="text-align: center;">Guidelines for PET-CT scans</h2></br>
        <div class="guidelines">
            <div class="guideline-card">
                <img src="assests\Group 35735.png" alt=""></br></br>
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
            <div class="guideline-card">
                <img src="assests\Group 35735 (1).png" alt=""></br></br>
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
            <div class="guideline-card">
                <img src="assests\Group 35822.png" alt=""></br></br>
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
        </div>
    </div>


    <ul id="ul-li">
        <li><img src="assests\Group 35751.png" alt="location"> <h6> Jubilee Hills</h6>  </li>  
        <li><img src="assests\Group 35751.png" alt="location"> <h6> Narayanaguda</h6>  </li> 
        <li><img src="assests\Group 35751.png" alt="location"> <h6> Panjagutta</h6> </li> 
        <li><img src="assests\Group 35751.png" alt="location"> <h6> Himayathnagar</h6></li>
    </ul></br>

     <div class=" text-center"><h2>Understanding PET-CT Scans: </h2>
        <h2>Importance, Need, and Cost in India</h2> </div> </br>
        <div class="pet-ct">
<div> <img src="assests\image 17.png"  alt="" width="350px"/></div>
<div class="accordion flex-md-grow-1 " id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      What is PET Scan?

      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> Positron Emission Tomography (PET) scan also known as PET imaging, it’s a type of nuclear medicine imaging. The tracer is used which can be swallows, injected or inhaled. PET is a combination of CT technique with PET scanner that works together to pr the human body which enables the healthcare worker to plan the process of cancer treatment further.
<code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div></br>
<div class="our-services"></br></br>
<div class="text-center  font-bold"><h2>Our - services</h2>
 </div> </br>
 <?php include('./ourServices.php') ?>
    </div>
</div></br>
<div class=" container-fluid p-3 mt-5 mb-5 bg-white">
            <h2 class=" fs-2 fw-bold  mb-3 text-center ">FAQS</h2>
            <div class="row d-flex flex-column flex-md-row  justify-content-center  align-items-center gap-2 ">
                <?php for ($i = 0; $i < 8; $i++) : ?>
                    <div class="col-12 col-md-5">
                        <div class="accordion accordion-flush" id="accordionFlushExample<?php echo $i; ?>">
                            <div class="accordion-item active" style="width: 100%;">
                                <h2 class="accordion-header" style="width: 100%;">
                                    <button style="width: 100%; color:#802A8F;" class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapseOne<?php echo $i; ?>">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="flush-collapseOne<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample<?php echo $i; ?>">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

                <!-- php Ends Here-->
            </div>
        </div></br>
        <footer>
            <h3 style="padding: 1.2rem;">@ Ciphar oncology pvt Ltd</h3>
        </footer>

</body>

</html>