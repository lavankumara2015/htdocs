<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $PageTitle="Hyderabad landing Page" ?></title>
  <link rel="stylesheet" href="./styles/index.css">
  <script src="./javaScript/index.js" defer></script>
  <link href="https://blogfonts.com/css/aWQ9MTM5NzM1JnN1Yj03MzUmYz1zJnR0Zj1zd2lzcys3MjErYm9sZCtjb25kZW5zZWQrYnQudHRmJm49c3dpczcyMS1jbi1idC01/Swis721 Cn BT.ttf" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</head>

<body>
  <div class="main-app">
  <?php include("./components/arrays.php") ?>


    <!-- nav bar -->
    <?php include("./components/navBar.php") ?>
  

    <!-- Header Banner -->

<header>
      <img class="small__device__bannerImage" src="./assets/Cion Hero mobile banner.png"  alt="Banner-image"/>
      <img class="medium__device__bannerImage" src="./assets/HeroBannerAllDocter.png" alt="Doctor-image" />
      <div class="header__content__sm">
        <h1>
       <span style="color:#802A8F;">FREE Consultation</span>&nbsp;with our expert Oncologists 
         </h1>
         <h1 id="minutes__session">
       <span style="color:#802A8F;" >30 minutes</span>&nbsp;session covering the following:
         </h1>
         <div class="header__bullet__points">
       <p><img src="./assets/Doctor_talk.png" alt="Doctor_talk"/> &nbsp; Verify your treatment plan</p>
       <p><img src="./assets/prescription.png" alt="prescription"/> &nbsp; Guidance on Symptom Management</p>
       <p><img src="./assets/Doctor_talk.png" alt="Doctor_talk"/>  &nbsp; Talk about alternate options</p>
       </div>
 </div>
      
</header>


<!-- BOOK APPOINTMENT (small devices) -->

<div class="Book-appointment-sm">
 <button>
 <img src="./assets/calendar.png" alt="Book-appointment-calender"> <a style="text-decoration: none; color:white" href="#form-details-container">BOOK APPOINTMENT</a></button>
</div>


    <!-- OUR SERVICES -->

    <div class="our-services-container">
      <div class="our__services">
        <h1 class="our__services__h1">OUR <span>SERVICES</span></h1>
        <span class="our__services__span"></span>
        <p>We are your companions in your journey to fight cancer. Our professional services are focused on offering the best treatment that you can get, supported by an empathetic integrative care team who will help you manage your life through treatment and beyond.</p>
      </div>
      <?php include("./components/ourServices.php"); ?>
    </div>

    <!-- Know Treatment Plan  Get Cost Estimation   Get Free Consultation -->

    <div id="TreatmentPlan-container">
      <button><a href="#" style="text-decoration: none; color:white">KNOW TREATMENT PLAN</a></button>
      <button><a href="#" style="text-decoration: none; color:white">GET COST ESTIMATION</a></button>
      <button><a href="#" style="text-decoration: none; color:white">GET FREE Consultation</a></button>
    </div>



    <!-- Form details -->
    
    <div class="form-details-container">

<!-- Why Choose Us CION Cancer Clinics -->
<?php include("./components/WhyChooseUsCION.php")?>

      <div>
        <img class="form__details__container__img" src="assets\HospitalImage.png" alt="hospital-picture"/>
      </div>
      <div>
      <form method="POST" action="./components/mySqlConnection.php">
    <div class="name__email__phone__password__container" id="name__phone__container">
        <div class="name__profile__container">
            <img class="name__profile__img" src="./assets/Layer_1.png" alt="profile-logo">
            <input type="text" name="name" placeholder="Your Full Name"  required minlength="3" maxlength="25" title="Alphabetic String (Minimum 3 Characters Required)">
        </div>
        <div class="name__email__container">
            <img class="name__email__img" src="./assets/Layer_1 (1).png" alt="email-logo" >
            <input type="email" name="email" placeholder="Your Mail ID" required title="Valid Email Address">
        </div>
    </div>
    <div class="name__email__phone__password__container name__email__phone__password__container-two">
        <div class="name__profile__container name__phone__container">
            <img class="name__phone__img" src="./assets/Layer_1 (2).png" alt="phone-logo">
            <input type="tel" name="phone" placeholder="10 Digit Mobile Number" required minlength="10" maxlength="14">
        </div>
        <div class="name__email__container name__location__container">
            <img class="name__location__img" src="./assets/Layer_1 (3).png" alt="location-logo">
            <input type="text" name="location" placeholder="Preferred Location"  required pattern="[a-zA-Z]{3,}" title="Alphabetic String (Minimum 3 Characters)">
        </div>
    </div>

    <div class="form-textarea">
        <textarea name="message" placeholder="Write Your Message"></textarea>
    </div>

    <button type="submit">BOOK FREE CONSULTATION</button>
</form>
      </div>
    </div>

 

  </div>
</body>

</html>