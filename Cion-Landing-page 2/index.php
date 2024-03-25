<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./styles/index.css">
  <script src="./javaScript/index.js" defer></script>
  <link href="https://blogfonts.com/css/aWQ9MTM5NzM1JnN1Yj03MzUmYz1zJnR0Zj1zd2lzcys3MjErYm9sZCtjb25kZW5zZWQrYnQudHRmJm49c3dpczcyMS1jbi1idC01/Swis721 Cn BT.ttf" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <div class="main-app">

    <!-- nav bar -->
    <nav>
      <div class="nav-bar">
      <img class="nav__bar__for__small" src="./assets/Group 72.png" alt="navbar-small-devices"/>
        <img class="nav__bar__Cion-logo" src="./assets/Logo.png" alt="Cion-logo" />
        <img class="nav__bar__phone__icon" src="./assets/Frame 72.png" alt="phone-icon"/>
   </div>
    </nav>
  

    <!-- Header Banner -->

<header>
      <img class="small__device__bannerImage" src="./assets/Web Banner M 1.png"  alt="Banner-image"/>
      <div class="header__content__sm">
        <h1>
      HOPE OF
 IMMUNOTHERAPY AT
 CION CANCER CLINICS
         </h1>
       <p><img src="./assets/Ellipse 11.png" alt="dot-icon"/> &nbsp;  Chain of 20+ Hospitals  &nbsp;<img style="display: inline;" src="./assets/Ellipse 11.png" alt="dot-icon"  width="6px" height="6px" style="display: block;" /> &nbsp; 15 Highly Qualified Oncologists</p>
       <p><img src="./assets/Ellipse 11.png" alt="dot-icon"/>  &nbsp;  2500+ Cancer Patients Served</p>
 </div>
      <img class="medium__device__bannerImage" src="./assets/image 12.png" alt="Doctor-image" />
</header>


<!-- BOOK APPOINTMENT (small devices) -->

<div class="Book-appointment-sm">

<button><img src="./assets/cal.png" alt="Book-appointment-calender"> <a style="text-decoration: none; color:white" href="#">BOOK APPOINTMENT</a></button>

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
<div class="why__choose__us">

</div>

      <div><img class="form__details__container__img" src="./assets/Group 81.png" alt="hospital-picture"/></div>
      <div>
      <form method="POST" action="">
    <div class="name__email__phone__password__container" id="name__phone__container">
        <div class="name__profile__container">
            <img class="name__profile__img" src="./assets/Layer_1.png" alt="profile-logo">
            <input type="text" name="Your Full Name" placeholder="Your Full Name">
        </div>
        <div class="name__email__container">
            <img class="name__email__img" src="./assets/Layer_1 (1).png" alt="email-logo">
            <input type="text" name="Your Mail ID" placeholder="Your Mail ID">
        </div>
    </div>

    <div class="name__email__phone__password__container name__email__phone__password__container-two">
        <div class="name__profile__container name__phone__container">
            <img class="name__phone__img" src="./assets/Layer_1 (2).png" alt="phone-logo">
            <input type="text" name="Your Full Name" placeholder="10 Digit Mobile Number">
        </div>
        <div class="name__email__container name__location__container">
            <img class="name__location__img" src="./assets/Layer_1 (3).png" alt="location-logo">
            <input type="text" name="Your Mail ID" placeholder="Preferred Location">
        </div>
    </div>

    <div class="form-textarea">
        <textarea placeholder="Write Your Message"></textarea>
    </div>

    <button type="submit"><a href="#">BOOK FREE CONSULTATION</a> </button>
</form>


      </div>
    </div>


 

  </div>
</body>

</html>