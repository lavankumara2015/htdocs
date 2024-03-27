

<?php switch ($PageTitle) {
    case 'Hyderabad landing Page':
       echo '<div class="Book-appointment-sm">
       <button>
       <img src="./assets/calendar.png" alt="Book-appointment-calender"> <a style="text-decoration: none; color:white" href="#form-details-container">BOOK APPOINTMENT</a></button>
      </div>
      ';
        break;
    
    default:
    echo "<h2>PageTitle is not matching</h2>";
    break;
} ?>