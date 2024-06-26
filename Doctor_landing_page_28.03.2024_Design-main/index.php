<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dr. purushottam landing page" content="landing page">
    <title>Dr Purushottam</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/our-locations.css">
    <link rel="stylesheet" href="./styles/operates-hospital.css">
    <link rel="stylesheet" href="./styles/reusable.css">
    <link rel="stylesheet" href="./styles/our-team.css">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/heroBanner.css">
    <link rel="stylesheet" href="./styles/DoctorsApproach.css">
    <link rel="stylesheet" href="./styles/patientReviewSection.css">
    <link rel="stylesheet" href="./styles/expertiseSection.css">
    <link rel="stylesheet" href="./styles/getInTouch..css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/faqs.css">
    <link rel="shortcut icon" href="./assets/favicon.webp" type="image/x-icon">
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="./javaScript/index.js" defer></script>
</head>

<body>
    <?php include "./components/connectDB.php"; ?>
    <?php include "./components/data.php"; ?>
    <div class="main-app">
        <?php include("./components/navBar.php") ?>
        <?php include("./components/heroBanner.php") ?>
        <?php include("./components/DoctorsApproach.php") ?>
        <div class="types-of-cancer-main-container">
            <h2> Surgical Oncologist <br />
                <span>Dr. Purushotham Area of Expertise</span>
            </h2>
            <?php include('./components/expertiseSection.php') ?>
        </div>
        <?php include('./components/patentsReviewsSection.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            // When the User Clicks On The Carousel Video Link This function Will get's triggered
            function openVideo(videoUrl) {
                // Display SweetAlert dialog with iframe content
                const iframeHtml = `
                <iframe width="90%" height="200" src="${videoUrl}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <button class="iframe__button" onclick="closeVideo()">Close Video</button>`;
                Swal.fire({
                    html: iframeHtml,
                    width: '95%',
                    padding: '1rem',
                    showCloseButton: false,
                    showConfirmButton: false,
                    showCloseButton: false,
                });
            }


            function closeVideo() {
                Swal.close(); // Close the SweetAlert dialog
            }

            // When the User Clicks On The epertise Card Section Link This function Will get's triggered

            function displayPopup() {
                const popupContainer = `
                <button class="popupbtn1" onclick="closeVideo()"><img src="assets/CancelButtonSmallDevices.webp" alt="cancel-button-icon" /></button>
                <button class="popupbtn2" onclick="closeVideo()"><img src="assets/Cancel.webp" alt="cancel-button-icon" /></button>
                <div class="popup-container">
                <img src="assets/popupBanner.webp" alt="" />
                <div class="popup__text__container">
                    <h3>To Know More About The Doctor</h3>
                    <form method="POST" action="components/formData.php">
                        <input name="username" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters" type="text" placeholder="Enter Your Name Here" name="name" />
                        <input name="userPassword" type="tel" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required" placeholder="Enter Your Phone Number Here" name="phone" />
                        <button type="submit">Submit</button>
                        <label >Call us at:</label>
                    <a href="tel:1800 120 2676"><button type="button">1800 120 2676</button></a>
                    </form>
                </div>
            </div>
    `;

                Swal.fire({
                    html: popupContainer,
                    width: '100%',
                    padding: '0px',
                    showCloseButton: false,
                    showConfirmButton: false,
                });
            }
        </script>
        <?php include('./components/getInTouch.php') ?>
        <?php include "./components/operatesHospital.php"; ?>
        <?php include "./components/ourLocations.php"; ?>
        <?php include "./components/faqs.php"; ?>
        <?php include "./components/ourTeam.php"; ?>
        <?php include "./components/footer.php" ?>
    </div>
</body>

</html>