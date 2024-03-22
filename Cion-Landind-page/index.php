<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cion Cancer Clinics</title>
  <link rel="shortcut icon" href="./assests/faviicon.webp" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
  <style>
    @media screen and (max-device-width: 480px) {
      select {
        -webkit-appearance: none;
        padding: 0.5rem;
      }
    }
  </style>
</head>
<body>
  <!-- nav bar -->
  <nav id="nav-bar">
    <div>
      <img src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="cion logo" />
      <button id="nav_bar_button"><a href="tel:18001202676" style="text-decoration: none; color:white">Contact Us</a></button>
    </div>
  </nav>
  <!-- section 1 main image and form  -->
  <section class="banner_form_image_section">
    <div class="banner-first-container d-flex flex-column  justify-content-center align-items-center">
      <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
        <span class="Rs10999">Rs.10999/-</span>
      </h1>
      <span id="banner_form_image_section_span">
        <img src="assests\Group 35815.webp" alt="Oncology Consultation" /><span> One Free Oncology Consultation</span>
      </span>
      <span id="banner_form_image_section_span">
        <img src="assests\Group 35811.webp" alt="Oncologist Diagnostics" /> <span> CION Assured Oncologist Diagnostics
        </span>
      </span>
    </div>
    <div id="back-pink">
      <div id="inputFiled">
        <form id="myForm" method="POST" action="./Components/Mysqlconnection.php">
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
  
<?php include("./Components/discountSection.php") ?></br>
  <!-- scan fee -->
  <div class="container-scan-fee"></br>
    <h2 class=" text-center" style="font-weight: 700;">Types of scans we do</h2>
    <?php include("./Components/TypesOfBodyScan.php") ?>
  </div>
  </div>
 
  <!-- Free now ! -->
  <div class="Consult-Our-Oncologist-container">
    <div>
      <img src="assests\ellipse-3.webp" alt="Ellipse" />
    </div>
    <div class="main-Free">
      <h2 class=" text-white" id="Understanding">Don’t have a prescription?</br>Consult Our Oncologist <strong>FREE</strong> now!</h2>
      <button><a href="#back-pink" style="text-decoration: none; color: #80288F">BOOK APPOINTMENT</a></button>
    </div>
  </div></br>
  <!-- Testimonials -->
  <h2 style="text-align: center; padding-bottom: 0.6rem;">Testimonials</h2>
  <?php include("./Components/testimonials.php") ?>

  <!-- Guidelines for PET - CT scans -->
  <div style="background-color: rgba(244, 244, 244, 1); padding: 1.5rem 0 2rem 0;">
    <h2 style="text-align: center;" class="Guidelines_for_pet_h2">Guidelines for PET-CT scans</h2></br>
    <div class="guidelines">
      <div class="guideline-card">
        <img src="assests\group-35735.webp" alt="water glass">
        </br>
        <h5>At least 6 hours of fasting before the scan, but the patient can have plain water.</h5>
      </div>
      <div class="guideline-card">
        <img src="assests\group-35735-1.webp" alt="calender">
        <h5>You are advised to report one hour before the scheduled time</h5>
      </div>
      <div class="guideline-card">
        <img src="assests\Group 35822.webp" alt="Reports image">
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
<div class="understanding-pet-ct-child text-center">
    <h2>Understanding PET-CT Scans: </h2>
    <h2 class="h2-Importance">Importance, Need, and Cost in India </h2>
  </div>
<div class="Understanding-PET-CT-container">
<div>
      <img data-bs-toggle="modal" data-bs-target="#exampleModal" src="assests\Group 35829.webp" alt="PET-CT Scan indoor" />
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
    <?php include('./Components/ourServices.php') ?>
  </div>

  <!-- FAQS Container -->
  <h1 class=" text-center p-1 faqs">FAQs</h1>
  <?php include("./Components/FQS.php") ?>

</br></br></br>
  <!-- footer -->
  <footer>
    <h5>@ Cipher Oncology Pvt Ltd</h5>
  </footer>

</body>
</html>