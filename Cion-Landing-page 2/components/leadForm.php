

<?php 
switch ($PageTitle) {
    case 'Hyderabad landing Page':
   echo    ' <form method="POST" action="./components/mySqlConnection.php">
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
    </form>';
     break;
    
      default:
    echo "<h2>PageTitle is not matching</h2>";
    break;
} ?>