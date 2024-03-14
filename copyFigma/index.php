<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancer Clinics</title>
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
            <button id="a1">Contact Us</button>
        </div>
    </nav>
    <!-- section 1 main image and form  -->
    <section class="banner_form_image_section">
        <div class="banner-first-container d-flex flex-column  justify-content-center align-items-center">
            <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
                <span class="Rs10999">Rs.10999/-</span>
            </h1>
            <span id="p-tag">
                <img src="assests\Group 35815.png" alt="Oncology Consultation" /><span> One Free Oncology Consultation</span>
            </span>
            <span id="p-tag">
                <img src="assests\Group 35811.png" alt="Oncologist Diagnostics" /> <span> CION Assured Oncologist Diagnostics
                </span>
            </span>
        </div>
        <div id="back-pink">
            <div id="inputFiled">
                <form id="myForm" onsubmit="clearForm()" method="POST" action="Mysqlconnection.php">
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
                    <p class="text-center"> <button type="submit" class="class-booknow">Book Now</button></p>
                </form>
            </div>
        </div>
    </section>


    <!-- discount section-->
    <ul class="container-assests">
        <li> <img src="assests\Group 35729.png" alt="Upto 40% Discount" />
            <p>Upto 40% Discount</p>
        </li>
        <li> <img src="assests\Group 35729 (1).png" alt="Same Day Reports" />
            <p>Same Day Reports</p>
        </li>
        <li> <img src="assests\Group 35729 (2).png" alt="100%Accuracy Assured" />
            <p>100% Accuracy Assured </p>
        </li>
        <li> <img src="assests\Group 35729 (3).png" alt="Free Doctor Consultation" />
            <p>Free Doctor Consultation</p>
        </li>
    </ul></br>

    <!-- scan fee -->

    <div class="container-scan-fee"></br>
        <h2 class=" text-center" style="font-weight: 700;">Types of scans we do</h2>
        <?php include("./TypesOfBodyScan.php") ?>
    </div>
    </div>
    <!-- Free now ! -->

    <div class="Free-now">
        <div>
            <img src="assests\Ellipse 3.png" alt="Ellipse" />
        </div>
        <div class="main-Free">
            <h2 class=" text-white" id="Understanding">Don’t have a prescription?</br>Consult Our Oncologist <strong>FREE</strong> now!</h2>
            <button>
                BOOK APPOINTMENT
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
                    <hr id="carousel-hr">
                    <span>Priya K.</span>
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                </div>
                <div class="carousel-item">
                    <p>Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
                    <hr id="carousel-hr">
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
    <div id="testimonial-carousel" class="carousel slide  md-device-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row d-flex flex-row flex-wrap justify-content-center  align-items-center ">
        <div class="col-md-5 mx-2">
          <div class="testimonial-single-card" style="background-color: #F0D0DD;">
            <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
            <hr id="carousel-hr">
            <span>Priya K.</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
          </div>
        </div>
        <div class="col-md-5">
          <div class="testimonial-single-card" style="background-color: #F0D0DD;">
            <p>Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
            <hr id="carousel-hr">
            <span>Arjun.S</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row  d-flex flex-row flex-wrap justify-content-center  align-items-center">
        <div class="col-md-5 mx-2">
          <div class="testimonial-single-card" style="background-color: #F0D0DD;">
            <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
            <hr id="carousel-hr">
            <span>Priya K.</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
          </div>
        </div>
        <div class="col-md-5">
          <div class="testimonial-single-card" style="background-color: #F0D0DD;">
            <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
            <hr id="carousel-hr">
            <span>Arjun.S</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
          </div>
        </div>
      </div>
    </div>
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
    <!-- Guidelines for PET - CT scans -->

    <div style="background-color: rgba(244, 244, 244, 1); padding: 1.5rem 0 2rem 0;">
        <h2 style="text-align: center;">Guidelines for PET-CT scans</h2></br>
        <div class="guidelines">
            <div class="guideline-card">
                <img src="assests\Group 35735.png" alt="water glass">
                </br>
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
            <div class="guideline-card">
                <img src="assests\Group 35735 (1).png" alt="calender">
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
            <div class="guideline-card">
                <img src="assests\Group 35822.png" alt="Reports image">
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
        </div>
    </div>

    <!-- hospital Locations -->
    <ul id="ul-li">
        <li><img src="assests\Group 35751.png" alt="location">
            <h6> Jubilee Hills</h6>
            <p class="pipe-jubile">|</p>
        </li>
        <li><img src="assests\Group 35751.png" alt="location">
            <h6> Narayanaguda</h6>
            <p class="pipe-Narayanaguda">|</p>
        </li>
        <li><img src="assests\Group 35751.png" alt="location">
            <h6> Panjagutta</h6>
            <p class="pipe-Panjagutta">|</p>
        </li>
        <li><img src="assests\Group 35751.png" alt="location">
            <h6> Himayathnagar</h6>
        </li>
    </ul></br>
    <!-- Understanding PET-CT -->

    <div class=" text-center">
        <h2>Understanding PET-CT Scans: </h2>
        <h2 class="h2-Importance">Importance, Need, and Cost in India </h2>
    </div>
    <div class="pet-ct">
        <div> <img src="assests\Group 35829.png" alt="PET-CT Scan indoor" /></div>
        <div style="border-style: black; " class=" pet-ct-accordion  bg-white border-1  p-0 ">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span id="accordion-item-button"> What is PET Scan?</span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Positron Emission Tomography (PET) scan also known as PET imaging, it’s a type of nuclear medicine imaging. </br>

                            The tracer is used which can be swallows, injected or inhaled. PET is a combination of CT technique with PET scanner that works together to pr the human body which enables the healthcare worker to plan the process of cancer treatment further. </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span id="accordion-item-button">Why you need PET Scan?</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span id="accordion-item-button"> How much PET Scan cost in India?</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
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
    <h1 class=" text-center p-1 faqs">FAQS</h1>
    <div class="a">
<div class="accordion accordion-flush" id="accordionFlushExample">
  <!-- Accordion Item #1 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      What's the average cost of a PET CT scan in Vizag?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">The average cost of a PET CT scan in Vizag typically ranges between 20,000 to 30,000 rupees. However, at Cion, we are committed to making cancer diagnostics and treatment both accessible and affordable. That's why we offer it at a special price of just 15,000 rupees.</div>
    </div>
  </div>

  <!-- Accordion Item #2 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Where can I get a pet scan in vizag ?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>

  <!-- Accordion Item #3 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      How much does a PET scan cost in vizag?

      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>

  <!-- Accordion Item #4 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
      Is there a Whole Body PET CT option?

      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the fourth item's accordion body. Add your content here.</div>
    </div>
  </div>
</div>


<div class="accordion accordion-flush" id="accordionFlushExample2">
  <!-- Fifth accordion item -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
      Are there PET scan facilities near me?

      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the fifth item's accordion body. Add your content here.</div>
    </div>
  </div>
  <!-- Sixth accordion item -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
      Where can I get a pet scan in vizag ?

      </button>
    </h2>
    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the sixth item's accordion body. Add your content here.</div>
    </div>
  </div>
  <!-- Seventh accordion item -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
      s there a Whole Body PET CT option?

      </button>
    </h2>
    <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the seventh item's accordion body. Add your content here.</div>
    </div>
  </div>
  <!-- Eighth accordion item -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
      Is there an option for a Whole Body PET CT scan?

      </button>
    </h2>
    <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
      <div class="accordion-body">Yes, our Whole Body PET CT Digital scans provide a detailed scan of your body to identify areas of high activity, which can help in detecting potential health issues, including cancer, more effectively.
</div>
    </div>
  </div>
</div>

    </div>

    </div>


    <!-- footer -->

    <!-- <footer>
        <h3 style="padding: 1rem;">@ Ciphar oncology pvt Ltd</h3>
    </footer> -->
</body>

<script>
    function clearForm() {
        document.getElementById("myForm").reset();
    }
</script>

</html>