<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta http-equiv="refresh" content="1"> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cion Cancer Clinics</title>
  <link rel="shortcut icon" href="./assests/Faviicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <style>
    @font-face {
      font-family: 'Source Sans 3';
      src: url('./Sans pro/static/SourceSans3-Regular.ttf') format('truetype');
      font-weight: 400;
    }

    @font-face {
      font-family: 'Source Sans 3';
      font-weight: 500;
      src: url('./Sans pro/static/SourceSans3-Medium.ttf') format('truetype');
    }

    @font-face {
      font-family: 'Source Sans 3';
      font-weight: 600;
      src: url('./Sans pro/static/SourceSans3-SemiBold.ttf') format('truetype');
    }

    @font-face {
      font-family: 'Source Sans 3';
      font-weight: 700;
      src: url('./Sans pro/static/SourceSans3-Bold.ttf') format('truetype');
    }

    body {
      font-family: 'Source Sans 3', sans-serif;
    }

    @media screen and (max-device-width: 480px) {

      select {
        -webkit-appearance: none;
        background-color: transparent;
        padding: 0.5rem;
        color: black;
      }
    }
  </style>

</head>

<body>

  <!-- nav bar -->
  <nav id="nav-bar">
    <div>
      <img src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="cion logo" />
      <button id="nav_bar_button">Contact Us</button>
    </div>
  </nav>
  <!-- section 1 main image and form  -->
  <section class="banner_form_image_section">
    <div class="banner-first-container d-flex flex-column  justify-content-center align-items-center">
      <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
        <span class="Rs10999">Rs.10999/-</span>
      </h1>
      <span id="banner_form_image_section_span">
        <img src="assests\Group 35815.png" alt="Oncology Consultation" /><span> One Free Oncology Consultation</span>
      </span>
      <span id="banner_form_image_section_span">
        <img src="assests\Group 35811.png" alt="Oncologist Diagnostics" /> <span> CION Assured Oncologist Diagnostics
        </span>
      </span>
    </div>
    <div id="back-pink">
      <div id="inputFiled">
        <form id="myForm" method="POST" action="./Mysqlconnection.php">
          <h1 style="color: black;">Book Your Pet Scan <br>Now! </h1>
          <input type="text" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" required pattern="[a-zA-Z]{3,}" title="Alphabetic String (Minimum 3 Characters)" />
          <input type="text" name="phone" placeholder="Phone number" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>" required pattern="[0-9]{10}" title="The Number Should consist 10 characters with all aidgits between 0 to 9" />
          <select id="cars" name="scan">
            <option value="select" style="color: #767676 !important;">Select type of Scan</option>
            <option value="Whole Body Analog Pet CT Scan">Whole Body Analog Pet CT Scan</option>
            <option value="Whole Body Digital Pet CT Scan">Whole Body Digital Pet CT Scan</option>
            <option value="PSMA Pet CT Scan">PSMA Pet CT Scan</option>
            <option value="Fdopa Pet CT Scan">Fdopa Pet CT Scan</option>
            <option value="Dotatate Pet CT Scan">Dotatate Pet CT Scan</option>
            <option value="Dotanoc Pet CT Scan">Dotanoc Pet CT Scan</option>
          </select>
          <p class="text-center"> <button type="submit" class="form_class_button">Book Now</button></p>
        </form>
      </div>
    </div>
  </section>


  <!-- discount section-->
  <ul class="discount-section-container">
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

  <div class="Consult-Our-Oncologist-container">
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
          <p>"The scan process was smoother than expected. Mustafa was helpful, answering my questions about medications, which eased my mind. It's good to have that level of support during such times."</p>
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
              <span style="position: relative; left:1rem">Priya K.</span>
              <span class="rating">⭐⭐⭐⭐⭐</span>
            </div>
          </div>
          <div class="col-md-5">
            <div class="testimonial-single-card" style="background-color: #F0D0DD;">
              <p>"The scan process was smoother than expected.
                </br>Mustafa was helpful, answering my questions about medications, which eased my mind. It's good to have that level of support during such times."</p>
              <hr id="carousel-hr" style="position: relative; top: 0.92rem">
              <span style="position: relative; top:1rem">Arjun.S</span>
              <span style="position: relative; top:1rem" class="rating">⭐⭐⭐⭐⭐</span>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row  d-flex flex-row flex-wrap justify-content-center  align-items-center">
          <div class="col-md-5 mx-2">
            <div class="testimonial-single-card" style="background-color: #F0D0DD;">
              <p>"The scan process was smoother than expected. Mustafa was helpful, answering my questions about medications, which eased my mind. It's good to have that level of support during such times."</p>
              </br>
              <hr id="carousel-hr" style="position: relative; bottom: 1.8rem">
              <span style="position: relative; bottom:1.7rem">Sunita P</span>
              <span style="position: relative; bottom:1.7rem" class="rating">⭐⭐⭐⭐⭐</span>
            </div>
          </div>
          <div class="col-md-5">
            <div class="testimonial-single-card" style="background-color: #F0D0DD;">
              <p>"I appreciated the efficiency of the scan and the post-scan support. Team was responsive to my questions, which helped."</p>
              </br>
              <hr id="carousel-hr" style="position: relative; bottom: 0.9rem">
              <span style="position: relative; bottom:0.7rem">Lakshmi G</span>
              <span class="rating" style="position: relative; bottom:0.7rem">⭐⭐⭐⭐⭐</span>
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
        <h5>At least 6 hours of fasting before the scan, but the patient can have plain water.</h5>
      </div>
      <div class="guideline-card">
        <img src="assests\Group 35735 (1).png" alt="calender">
        <h5>You are advised to report one hour before the scheduled time</h5>
      </div>
      <div class="guideline-card">
        <img src="assests\Group 35822.png" alt="Reports image">
        <h5 id="guideline-card-h5-carry">Carry previous PET-CT reports,CDs,medical records,recent serum creatinine and fasting blood sugar reports.</h5>
      </div>
    </div>
  </div>

  <!-- hospital Locations -->
  <ul id="location-vizag-container">
    <li><img src="assests\Group 35751.png" alt="location">
      <h6> Chinnagadili</h6>
      <p class="Chinnagadili_pipe">|</p>
    </li>
    <li><img src="assests\Group 35751.png" alt="location">
      <h6>MVP Colony</h6>
      <p class="MVP_Colony_pipe">|</p>
    </li>
    <li id="ul-li-jagadamba-center"><img src="assests\Group 35751.png" alt="location">
      <h6>Jagadamba Centre</h6>
      <p class="jagadamba_centre_pipe"></p>
    </li>

  </ul></br>


  <!-- Understanding PET-CT -->

  <div class=" text-center">
    <h2>Understanding PET-CT Scans: </h2>
    <h2 class="h2-Importance">Importance, Need, and Cost in India </h2>
  </div>
  <div class="Understanding-PET-CT-container">
    <div>
      <img data-bs-toggle="modal" data-bs-target="#exampleModal" src="assests\Group 35829.png" alt="PET-CT Scan indoor" />
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lE6bzCEjyU0?si=5KhCCqRzjCbA_JiD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div style="border-style: black; " class=" pet-ct-accordion  bg-white border-1  p-0 ">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <span id="accordion-item-button" style="color: black;"> What is PET Scan?</span>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              PET scan is a medical imaging method using a trace of radioactive material to reveal metabolic activity. It helps detect and monitor diseases, especially cancer, by providing detailed insights into tissue function. PET scans are often combined with other imaging techniques for comprehensive diagnostics.</div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span id="accordion-item-button" style="color: black;">Why you need PET Scan?</span>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                PET scans are crucial for diagnosing and monitoring diseases, as they reveal metabolic activity in tissues. This imaging technique is particularly valuable in detecting cancer and assessing treatment effectiveness. It aids physicians in making informed decisions about patient care based on detailed insights into the body's physiological processes. </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <span id="accordion-item-button" style="color: black;"> How much PET Scan cost in India?</span>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              The cost of a PET scan in India can vary widely depending on the city, facility, and specific requirements. On average, it may range from ₹15,000 to ₹35,000 or more. It is advisable to check with individual healthcare providers for accurate and up-to-date pricing information. </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div></br>

  <!-- our-services section -->

  <div class="our-services-container"></br>
    <div class="text-center  font-bold">
      <h2>Our-services</h2>
    </div>
    <?php include('./ourServices.php') ?>
  </div>


  <!-- FAQS Container -->
  <h1 class=" text-center p-1 faqs">FAQS</h1>
  <div class="FAQ-container-accordions">
  <div class="accordion accordion-flush" id="accordionFlushExample1">
  <!-- Accordion Items 1 to 5 -->
  <!-- Accordion Item #1 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Where can I get a PET scan in Vizag?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
      <div class="accordion-body">At Cion Cancer Clinic, we have facilities in Vizag, making it convenient for you.</div>
    </div>
  </div>

  <!-- Accordion Item #2 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        How much does a PET scan cost in Vizag?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
      <div class="accordion-body">Our PET scans start at ₹14,999, ensuring quality without breaking the bank.</div>
    </div>
  </div>

  <!-- Accordion Item #3 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Is there a Whole Body PET CT option?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
      <div class="accordion-body">Yes, our Whole Body PET CT Digital scans give a complete view of your health.</div>
    </div>
  </div>

  <!-- Accordion Item #4 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Are there PET scan facilities near me?
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
      <div class="accordion-body">Find a Cion Cancer Clinic near you for accessible and quality PET scans.</div>
    </div>
  </div>

  <!-- Accordion Item #5 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        What's the average PET CT scan in Vizag?
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
      <div class="accordion-body">Benefit from our competitive pricing, reflecting our commitment to your well-being.</div>
    </div>
  </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample2">
  <!-- Accordion Items 6 to 10 -->
  <!-- Accordion Item #6 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
        How much does a PET scan cost in Vizag?
      </button>
    </h2>
    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
      <div class="accordion-body">At just ₹14,999, our PET scans offer the high-quality care you deserve, balancing excellence with cost-effectiveness.</div>
    </div>
  </div>

  <!-- Accordion Item #7 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
        Is there an option for a Whole Body PET CT scan?
      </button>
    </h2>
    <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2
    ">
      <div class="accordion-body">Yes, our Whole Body PET CT Digital scans provide a detailed scan of your body to identify areas of high activity, which can help in detecting potential health issues, including cancer, more effectively.</div>
    </div>
  </div>

  <!-- Accordion Item #8 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
        Are there PET scan facilities near me?
      </button>
    </h2>
    <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
      <div class="accordion-body">To find a PET CT near you, please call us. Our network of trusted partners at Cion Cancer Clinics offers accessible and quality PET CT scans.</div>
    </div>
  </div>

  <!-- Accordion Item #9 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
        What's the average cost of a PET CT scan in Vizag?
      </button>
    </h2>
    <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
      <div class="accordion-body">At Cion Cancer Clinic, we have facilities in Vizag, making it convenient for you.</div>
    </div>
  </div>

  <!-- Accordion Item #10 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
        Where can I get a PET scan in Vizag?
      </button>
    </h2>
    <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
      <div class="accordion-body">Locate MRI facilities nearby to schedule your imaging needs efficiently.</div>
    </div>
  </div>
</div>



  </div>
  </div>
  </div></br>
  <!-- footer -->

  <footer>
    <h5>@ Cipher Oncology Pvt Ltd</h5>
  </footer>
</body>

<!-- <script>
    function clearForm() {
        document.getElementById("myForm").reset();
    }
</script> -->

</html>