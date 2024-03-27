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

  <!-- All php arrays -->
  <?php include("./components/arrays.php") ?>


  <!-- nav bar -->
  <?php include("./components/navBar.php") ?>
  

  <!-- Hero Banner (Header) -->
  <?php include("./components/heroBanner.php") ?>


 <!-- BOOK APPOINTMENT BUTTON (small devices) -->
 <?php include("./components/bookAppointmentButton.php") ?>


  <!-- OUR SERVICES -->
  <?php include("./components/ourServices.php"); ?>
    

  <!-- Know Treatment Plan  Get Cost Estimation Get Free Consultation (Buttons) -->
  <?php  include("./components/knowTreatmentPlanButtons.php") ?>


  <!-- Form details --> 
  <div class="form-details-container">

  <!-- Why Choose Us CION Cancer Clinics -->
  <?php include("./components/WhyChooseUsCION.php")?>
   <div>
        <img class="form__details__container__img" src="assets\HospitalImage.png" alt="hospital-picture"/>
   </div>
  <div>
  <!-- leadForm -->
  <?php include("./components/leadForm.php") ?>
    </div>
    </div>


    <!-- OUR CANCER TREATMENT IN HYDERABAD -->

    <div class="our-cancer-treatment-container">
      
     <h1>OUR CANCER TREATMENT <span style="color: #802A8F;">IN HYDERABAD</span></h1>
     <span class="our__cancer__treatment__container__span"></span>
     <p>CION Cancer Clinic is an accredited Oncology facility, renowned for our efficient care and our expert team of 
      experienced Surgeons and Oncologists that make sure you receive the best cancer treatment in Hyderabad. With a 
      holistic approach to oncology screening including advanced treatments using state-of-the-art technology, we aim 
      to be a consistently leading healthcare provider and the go-to cancer hospital in Hyderabad. We have the best 
      cancer specialists in Hyderabad that provide comprehensive cancer care throughout your journey. Digitizing care, 
      maintaining strict protocols, and providing comprehensive accessibility to Cancer Care, Cancer Hospitals' futuristic
       approach enables new pathways in the deliverance of 100% quality cancer care.</p>
  
    </div>

 

  </div>
</br></br></br></br></br></br></br></br></br>
</body>

</html>