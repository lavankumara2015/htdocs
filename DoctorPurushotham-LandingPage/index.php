<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dr. purushottam landing page" content="landing page" >
    <title>Dr.Purushottam Landing Page</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/navbar.css">
   <link rel="stylesheet" href="./styles/heroBanner.css">
   <link rel="stylesheet" href="./styles/DoctorsApproach.css">
   <link rel="shortcut icon" href="/assets/favicon.webp" type="image/x-icon">
    <script src="./javaScript/index.js" defer></script>
</head>
<body>
    <div class="main-app">
    <!-- navBar -->
    <?php include("./components/navBar.php") ?>

    <!-- hero-banner -->
  <?php include("./components/heroBanner.php") ?>

  <!-- Doctor’s approach to treatment -->
  <?php include("./components/DoctorsApproach.php") ?>


    </div>
</body>
</html>