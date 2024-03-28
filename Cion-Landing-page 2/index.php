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
<!-- 
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
  
    </div> -->



    <!-- our Locations-->


    <div class="our-location-cotnainer">
            <!-- City & Sub City Container -->
            <div>
                <!-- City Container -->
                <div class="our_city_Container">
                    <?php foreach ($citiAndData as $cityData) : ?>
                        <button onclick="getCenterDetails('<?php echo $cityData['id']; ?>')">
                            <?php echo $cityData['city_name']; ?>
                        </button>
                    <?php endforeach; ?>
                </div>
                <!-- Sub City Container -->
                <div class="sub-city">

                    <!-- Sub City Content will be loaded here -->
                </div>

            </div>
            <!-- Map Container -->
            <div id="map-container">
                <!-- Map Content will be loaded here --> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60904.47300003054!2d78.36469782525963!3d17.43434995112842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb96cb8c494053%3A0x4da3f7e6dc208bb1!2sCion%20Cancer%20Clinics-%20Cancer%20Hospital%20in%20Hyderabad%20-%20Jubilee%20Hills!5e0!3m2!1sen!2sin!4v1685958356509!5m2!1sen!2sin"></iframe>
            </div>
        </div>

        <script>
            window.onload = function() {
                // Load details of the first city on page load
                var firstCityId = '<?php echo $citiAndData[0]['id']; ?>';
                getCenterDetails(firstCityId);
            };

            function getCenterDetails(cityId) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            var subCityContainer = document.querySelector('.sub-city');
                            subCityContainer.innerHTML = xhr.responseText;
                            // Get the map URL of the first sub-city
                            var mapUrl = '<?php echo $citiAndData[0]["centers"][0]["map_url"]; ?>';
                            // Display the map of the first sub-city
                            updateSubCities(mapUrl);
                        } else {
                            console.error('Request failed with status:', xhr.status);
                        }
                    }
                };
                xhr.open('GET', './components/sub_city.php?cityId=' + encodeURIComponent(cityId)); 
                xhr.send();
            }

            function updateSubCities(mapUrl) {
                var mapContainer = document.getElementById("map-container");
                mapContainer.innerHTML = '<iframe src="' + mapUrl + ' style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
            }
        </script>
  </div>
</br></br></br></br></br></br></br></br></br>
</body>

</html>