

<?php    

switch ($PageTitle) {
    case 'Hyderabad landing Page': echo
       '<header>
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
       </header>';
        break;
    
    default:
    echo "<h2>PageTitle is not matching</h2>";
           break;
}
?>









