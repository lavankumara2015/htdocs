<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cion Landing Page</title>
    <link rel="shortcut icon" href="https://www.cioncancerclinics.com/images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        #nav {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 1);
            z-index: 1000;
        }

        #nav img {
            padding: 15px;
            height: 100%;
        }

        #a1 {
            text-decoration: none;
            background-color: rgb(187, 45, 59);
            color: white;
            padding: 12px;
            border-radius: 8px;
            float: right;
            margin-top: -45px;
            position: relative;
            right: 50px;
            bottom: 20px;    
        }

        section {
            padding-top: 18vh;
        }

        .main-img {
            width: 100%;
            height: auto;
        }

        @media screen and (max-width: 768px) {
            #inputFiled {
                width: 100%;
                height: auto;
                background-color: white;
            }
        }

        @media screen and (min-width: 769px) {
            #inputFiled {
                width: 25%;
                height: auto;
                background-color: white;
                position: absolute;
                top: 20%;
                right: 5%;
                padding: 20px;
                border-radius: 10px;
            }
        }

        form input {
            padding: 15px;
            margin: 15px;
            width: calc(100% - 100px);
            border-radius: 10px;
            background-color: rgb(237, 237, 237);
            border: none;
            margin-left: 9%;

        }

        form h1 {
            color: rgb(166, 95, 162);
            font-size: 28px;
            margin-left: 12%;
            margin-bottom: 20px;
        }

        button {
            background-color: rgb(166, 95, 162);
            color: white;
            font-size: 20px;
            padding: 8px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            margin-left: 38%;
        }

        #inputFiled {
            margin-top: 45px;

        }

        #section2 {
            display: flex;
            margin-left: 7%;

        }

        #section2-div1 {
            width: 42%;

        }

        #section2-div2 {
            width: 50%;
            /* height: 30%; */
            margin-left: 2%;
            /* background-color: red; */
            margin-top: -2%;

        }

        #section2 h2 {
            color: rgb(108, 117, 125);
        }
    </style>
</head>

<body>

    <!-- nav bar -->

    <nav id="nav">
        <div>
            <img src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="cion logo" />
            <a href="https://www.cioncancerclinics.com" id="a1"]>Call : 18001202676</a>
        </div>
    </nav>

    <!-- section 1  -->

    <section>
        <div>
            <img class="main-img" src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/web_banner_v6_21_11zon.webp" alt="Banner Image" />
            </br>
            <div id="inputFiled">
                <form method="POST" action="redirect.php">
                    <h1>Book Your Biopsy test</h1>
                    <input type="name" name="name" placeholder="Name" /> <br>
                    <input type="Email" name="Email" placeholder="Email ID" /><br>
                    <input type="phone" name="phone" placeholder="Phone number " /><br>
                    <input type="city" name="city" placeholder="City" /><br><br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <!-- section2 -->

    <section id="section2">

        <div id="section2-div1"> <img src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/biopsy-test-img_7_11zon.webp" width="600px" height="350px" /></div>
        <div id="section2-div2">
            <h1 style="color: rgb(166, 95, 162);
            font-size: 28px;">Biopsy Test Cost in Hyderabad</h1>
            <h2>Biopsy Services at Cion Cancer Clinics: Affordable Pricing, Accurate Results.</h2>
            <h2>We guarantee you the best price in the market. You can trust that you're getting the highest quality at the most competitive rates. We put transparency first.</h2>
            <h2>Wondering about costs?</h2>
            <h2>Your Cost Estimate is just a click away.</h2>
            <button>Call Now</button>
        </div>

    </section>

    <section id="section2">


        <div id="section2-div2">
            <h1 style="color: rgb(166, 95, 162);
        font-size: 28px;">Biopsy Test Cost in Hyderabad</h1>
            <h2 style="color: rgb(166, 95, 162);
        font-size: 28px;">From Diagnosis to Treatment, Expertise at Every Stage</h2>
            <h2>Reduce the risk of repeat biopsy and wrong diagnosis by getting the biopsy done by expert surgical oncologist rather than a generic diagnostic surgeon
                Free consultation to know the right biopsy techniques, risks involved and care to be taken for biopsy process - Get Free In-person Cancer Doctor Consultation</h2>

        </div>

        <div id="section2-div1"> <img src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/new-img_17_11zon.webp" width="600px" height="370px" /></div>
    </section>
</br></br>

    <!-- Types of Biopsy We Treat      -->

 
    <h1 class=" text-center text-4xl " style="color: #A65FA2;"> Types of Biopsy We Treat </h1></br></br>

   
        <?php

        $array = array(
            array("id" => 1, "title" => "Liver Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/lung_biopsy_14_11zon.webp"),
            array("id" => 2, "title" => "Endometrial", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/lung_biopsy_14_11zon.webp"),
            array("id" => 3, "title" => "Mouth Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/mouth_biopsy_16_11zon.webp"),
            array("id" => 4, "title" => "Breast Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/breast_biopsy_9_11zon.webp"),
            array("id" => 5, "title" => "Ovarian Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/ovarian_biopsy_19_11zon.webp"),
            array("id" => 6, "title" => "Lung Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/liver_biopsy.webp"),
            array("id" => 7, "title" => "Kidney Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/kidney_biopsy_12_11zon.webp"),
            array("id" => 8, "title" => "Bone  Marrow Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/lung_biopsy_14_11zon.webp"),
            array("id" => 9, "title" => "Other Biopsies", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/other_biopsies_18_11zon.webp")
        );
        ?>

  
      <div class=" flex flex-wrap justify-center items-center gap-10">
            <?php
            $count = count($array);
            for ($i = 0; $i < $count; $i++) {
               echo "<div >";
               echo "<img src='" . $array[$i]["url"] . "' class='h-20 w-30 ' />";
               echo  $array[$i]["title"] ;
               echo "</div>";
               
            }
            ?>
        </div>
     
        </br></br>
        <footer>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. In recusandae rerum possimus reprehenderit eos tenetur incidunt est quasi nisi corrupti beatae odit sed a fugiat rem quaerat laboriosam, non nobis.
        </footer>

        <?php 
        echo $_SERVER['PHP_SELF'];
        echo $_SERVER['SERVER_NAME'];
        echo $_SERVER['HTTP_HOST'];
        echo $_SERVER['HTTP_REFERER'];
        echo $_SERVER['HTTP_USER_AGENT'];
        echo $_SERVER['SCRIPT_NAME'];
        ?>


</body>

</html>