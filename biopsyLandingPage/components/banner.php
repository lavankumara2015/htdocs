
<?php
error_reporting(E_ALL ^E_NOTICE);
ob_start();
$utm_source = (isset($_REQUEST['utm_source']) && $_REQUEST['utm_source'] != '') ? $_REQUEST['utm_source'] : '';
$utm_campaign = (isset($_REQUEST['utm_campaign']) && $_REQUEST['utm_campaign'] != '') ? $_REQUEST['utm_campaign'] : '';
$utm_medium = (isset($_REQUEST['utm_medium']) && $_REQUEST['utm_medium'] != '') ? $_REQUEST['utm_medium'] : '';
?>
<div class="banner">
    <h1 class="banner__top-text">
        Biopsy Test Cost
        <span class="banner__span">at <span>Just Rs.1499/-</span></span>
        onwards
    </h1>
    <form class="banner__form" method="POST" action="./formRedirectPage.php">
        <div class="banner__form-top">
            <img src="../assets/phoneImg.webp" alt="phone-icon">
            +91 7032656153 / 9989835053
        </div>
        <h1 class="banner__form-heading">Book Your <span style="color:var(--brandClr);">Biopsy Test Now !</span></h1>
        
        
                         <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utm_source;?>">
						<input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $utm_campaign;?>">
						<input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utm_medium;?>">
						<input type="hidden" name="form_source" id="form_source" value="Biopsy Landing Page">
        
        <input class="banner__first-input" type="text" placeholder="Name" name="name" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters">
        <input type="text" placeholder="Phone number" name="phone" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required">
        <input type="text" placeholder="Message" name="message" required minlength="20" maxlength="500" title="Minimum 20 Characters Required">
        <button type="submit" class="banner__submit-btn">
            Book Now
        </button>
    </form>
    <div class="banner__additional-benifit-text">
        <h1>Additional Benefits</h1>
        <p>Get In-Person Oncologist Consultation Worth <span class="banner__money-span">Rs. 850/-</span> for <span>FREE</span></p>
        <p style="margin-top: .1132rem;">Get Free Biopsy Cost Estimation</p>
    </div>
</div>
<div class="invisible-form-box">

</div>