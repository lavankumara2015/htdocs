

<?php 

switch ($PageTitle) {
    case 'Hyderabad landing Page':
       echo'
       <div id="TreatmentPlan-container">
         <button><a href="#" style="text-decoration: none; color:white">KNOW TREATMENT PLAN</a></button>
         <button><a href="#" style="text-decoration: none; color:white">GET COST ESTIMATION</a></button>
         <button><a href="#" style="text-decoration: none; color:white">GET FREE Consultation</a></button>
       </div>';
   
        break;
    
    default:
    echo "<h2>PageTitle is not matching</h2>";
    break;
}

?>