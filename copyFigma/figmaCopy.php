<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma Copy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        * {
            font-style: gc_collect_cycles;
        }

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
            padding: 13px;
            background-color: rgb(128, 42, 143);
            border-radius: 10px;
            color: white;
            float: right;
            margin-top: 45px;
            position: relative;
            right: 50px;
            bottom: 20px;
        }

        section {
            padding-top: 18vh;
        }

        .main-img {
            width: 100%;
            height: 95vh;
        }

        @media screen and (max-width: 768px) {
            #inputFiled {
                width: 88%;
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
                top: 30%;
                right: 7%;
                padding: 20px;
                border-radius: 10px;
            }
        }

        form input,
        form select {
            padding: 15px;
            margin: 15px;
            width: calc(100% - 65px);
            border-radius: 10px;
            background-color: rgb(237, 237, 237);
            border: none;
            margin-left: 9%;
        }

        form h1 {
            color: rgb(166, 95, 162);
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
        }

        button {
            background-color: rgb(128, 42, 143);
            color: white;
            font-size: 20px;
            padding: 8px;
            border-radius: 12px;
            border: none;

        }

        #inputFiled {
            margin-top: 45px;
            margin-left: 20px;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            justify-content: space-between;
        }

        @media screen and (min-width : 768px) {
            .container {
                grid-template-columns: 1fr 1fr 1fr 1fr;
            }
        }

        .container li {
            list-style-type: none;
            display: flex;
            align-items: center;
        }

        .container li img {
            width: 60px;
            height: 60px;
        }

        .container li p {
            margin-left: 15px;
            font-weight: 550;
        }

        .container-scan-fee {
            background-color: rgb(240, 208, 221);
            /* padding: 105px; */
            width: 100%;
           
        }
        
            @media screen and (max-width:568px) {
                .card h3{
                  font-size: 16px;
                  
                }
                
          

            }
        

        .container-types {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            padding: 20px;
        }

        @media screen and (min-width:768px) {
            .container-types {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }

        .card {
            display: flex;
            flex-direction: column;
            padding: 30px;
            text-align: center;
            border-radius: 3.5%;

            
        }

      

        .Free-now {
            background-image: linear-gradient(to right, #802A8F, #D37FA0);
            display: flex;
            /* justify-content: center;  */
            align-items: center;
        }

        .Free-now img {
            width: 140px;
            padding: 20px;
        }

        .Free-now h3 {
            color: white;
            max-width: 450px;

            @media (max-width:768px) {
                max-width: initial;
            }
        }

        .main-Free {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            /* align-items: center; */
            flex-grow: 1;
            padding: 10px;

            @media screen and (max-width:768px) {
                flex-direction: column;
                align-items: flex-start !important;
            }
        }

        .main-Free button {
            background-color: white;
            color: rgb(128, 42, 143);
            font-weight: 500;
            padding: 10px;
            border-radius: 4px;
            align-self: center;
        }

        @media (max-width: 768px) {
            .main-Free button {
                align-self: initial;
            }
        }

        .testimonials-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 80px;
            /* margin: 110px; */
            gap: 50px;
        }

        @media screen and (max-width: 768px) {
            .testimonials-container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 50px;
                gap: 20px;
            }
        }

        .testimonial-card {
            background-color: #F0D0DD;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .testimonial-card p {
            margin-bottom: 35px;
            padding: 25px;
        }

        .testimonial-card hr {
            margin: 10px 0;
            border-top: 1px solid #ccc;
        }

        .testimonial-card .rating {
            float: right;
            color: #ffcc00;
        }

        .guidelines {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }



        .guideline-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            margin-top: 16px;
        }

        @media screen and (min-width:768px) {
            .guideline-card {
                width: 32%;
            }
        }

        .guideline-card:last-child {
            margin-right: 0;
        }

        .guideline-card img {
            width: 80px;
        }
        #ul-li{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            justify-content: space-evenly;
            align-items: center;
            list-style: none;
            background-color:  #802A8F;
            height: 10vh;
            
        }
        @media screen and (max-width:768px) {
            #ul-li{
        
         grid-template-columns: 1fr 1fr;
         height: 20vh;
            
        }}
        
        #ul-li h6{
          color: white;
          display: inline;
        }
        #ul-li img{
            width: 30px;
        }
        #ul-li hr{
color: white;   
border: 5px solid white;
        }
        .pet-ct{
            display: flex;
            padding: 20px;
            gap: 20px;
        }
        @media screen and (max-width:768px) {
            .pet-ct{
            display: flex;
flex-direction: column;     
       /* gap: 20px; */
        }}
        .accordion-body{
            background-color: rgba(240, 208, 221, 1);
        }
        /* .accordion-button {
            background-color: rgba(240, 208, 221, 1);
        } */
        .our-services{
            background-color:rgba(240, 208, 221, 1) ;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 50px;
        
        }
        @media screen and (max-width:768px) {
            .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        
        }
        
    }

        .card-1 {
            border: 1px solid #ccc;
            /* padding: 50px; */
            text-align: center;
            justify-content: center;
            background-color: white;
            border-radius: 4%;
            padding: 20px;
        }

        .card-1 img {
            width: 100px;
            height: 100px;

        }
        footer{
            background-color: black;
            color: white;
            height: 10vh;
            text-align: center;
        }
       
        
        
    </style>
</head>

<body>

    <!-- nav bar -->

    <nav id="nav">
        <div>
            <img src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="cion logo" />
            <a href="https://www.cioncancerclinics.com" id="a1">Contact us</a>

        </div>
    </nav>

    <!-- section 1  -->

    <section>
        <div>
            <img class="main-img" src="assests\Group 35809.jpg" alt="Banner Image" />
            </br>
            <div id="inputFiled">
                <form method="POST" action="redirect.php">
                    <h1 style="color: black;">Book Your Pet Scan </h1>
                    <input type="name" name="name" placeholder="Name" /> <br>
                    <input type="phone" name="phone" placeholder="Phone number " /><br>
                    <select id="cars" name="scan">
                        <option value="select">Select type of Scan</option>
                        <option value="Whole Body Analog Pet CT Scan">Whole Body Analog Pet CT Scan</option>
                        <option value="Whole Body Digital Pet CT Scan ">Whole Body Digital Pet CT Scan </option>
                        <option value="PSMA Pet CT Scan">PSMA Pet CT Scan</option>
                        <option value="Fdopa Pet CT Scan">Fdopa Pet CT Scan</option>
                        <option value="Dotatate Pet CT Scan">Dotatate Pet CT Scan</option>
                        <option value="Dotanoc Pet CT Scan">Dotanoc Pet CT Scan</option>
                    </select></br></br>
                    <p class="text-center"> <button type="submit">Submit</button></p>

                </form>
            </div>
        </div>
    </section></br></br>

    <!-- discount section-->

    <ul class="container">
        <li> <img src="assests\Group 35729.png" alt="" />
            <p>Upto 40% Discount</p>
        </li>
        <li> <img src="assests\Group 35729 (1).png" alt="" />
            <p>Same Day Reports</p>
        </li>
        <li> <img src="assests\Group 35729 (2).png" alt="" />
            <p>100% Accuracy Assured </p>
        </li>
        <li> <img src="assests\Group 35729 (3).png" alt="" />
            <p>Free Doctor Consultation</p>
        </li>
    </ul></br>

    <!-- scan fee -->
    <div class="container-scan-fee"></br>
        <h2 class=" text-center">Types of scans We do</h2>
        <?php
        $arr = [
            ["whole Body Analog Pet", "Rs 18000/-", "Rs.14999/-"],
            ["Whole Body Digital  Pet", "Rs 25000/-", "Rs.20999/-"],
            ["PSMA Pet  Scan ", "Rs 35000/-", "Rs.31000/-"],
            ["Fdopa Pet Scan  ", "Rs 35000/-", "Rs.31000/-"],
            ["Dotatate Pet  Scan", "Rs 35000/-", "Rs.31000/-"],
            ["Dotanoc Pet  Scan", "Rs 35000/-", "Rs.31000/-"]
        ];
        ?>

        <div class="container-types">
            <?php foreach ($arr as $details) : ?>
                <div class="card">
                    <h3><?php echo $details[0]; ?></h3>
                    <p style="text-decoration: line-through; color: #BEBBBB; "> <?php echo $details[1]; ?></p>
                    <p style="color:#802A8F ; font-size:20px"> <?php echo $details[2]; ?></p>
                    <hr>
                    <button>Book now</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Free now ! -->

    <div class="Free-now">

        <div>
            <img src="assests\Ellipse 3.png" alt="" />
        </div>
        <div class="main-Free">
            <h3>Don’t have a prescription? Consult Our Oncologist FREE now!</h3>
            <button>BOOK APPOINTMENT</button>
        </div>

    </div></br>

    <!-- Testimonials -->
    <h2 style="text-align: center;">Testimonials</h2>

    <div class="testimonials-container">
        <div class="testimonial-card">
            <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
            <hr style="border: 1px solid rgb(176, 169, 166) ;">
            <span>Priya K.</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
        </div>

        <div class="testimonial-card">
            <p>Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
            <hr style="border: 1px solid rgb(176, 169, 166) ;">
            <span>Arjun.S</span>
            <span class="rating">⭐⭐⭐⭐⭐</span>
        </div>
    </div>

    <div style="background-color: rgb(217, 217, 219); padding: 25px;">
        <h2 style="text-align: center;">Guidelines for PET-CT scans</h2></br>
        <div class="guidelines">
            <div class="guideline-card">
                <img src="assests\Group 35735.png" alt=""></br></br>
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
            <div class="guideline-card">
                <img src="assests\Group 35735 (1).png" alt=""></br></br>
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
            <div class="guideline-card">
                <img src="assests\Group 35822.png" alt=""></br></br>
                <h5>At least 6 hours of fasting before the scan, but the patient can have plain water</h5>
            </div>
        </div>
    </div>


    <ul id="ul-li">
        <li><img src="assests\Group 35751.png" alt="location"> <h6> Jubilee Hills</h6>  </li>  
        <li><img src="assests\Group 35751.png" alt="location"> <h6> Narayanaguda</h6>  </li> 
        <li><img src="assests\Group 35751.png" alt="location"> <h6> Panjagutta</h6> </li> 
        <li><img src="assests\Group 35751.png" alt="location"> <h6> Himayathnagar</h6></li>
    </ul></br>

     <div class=" text-center"><h4>Understanding PET-CT Scans: </h4>
        <h4>Importance, Need, and Cost in India</h4> </div> </br>

        <div class="pet-ct">
<div> <img src="assests\image 17.png"  alt="" width="350px"/></div>
<div class="accordion flex-md-grow-1 " id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      What is PET Scan?

      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> Positron Emission Tomography (PET) scan also known as PET imaging, it’s a type of nuclear medicine imaging. The tracer is used which can be swallows, injected or inhaled. PET is a combination of CT technique with PET scanner that works together to pr the human body which enables the healthcare worker to plan the process of cancer treatment further.
<code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div></br>

<div class="our-services"></br></br>

<div class="text-center  font-bold"><h2>Our - services</h2>
 </div> </br>

 <?php
        $arr = [
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"],
            ["assests\Group 35781.png", "Cancer Sugeries"]
        ];
        ?>
         <div class="grid-container">
        <?php foreach ($arr as $item): ?>
            <div class="card-1">
                <img src="<?php echo $item[0]; ?>" alt="Icon">
                <h4 style="margin-top: 15px;"><?php echo $item[1]; ?></h4>
            </div>
        <?php endforeach; ?>
    </div>
</div></br>
<div class=" container-fluid p-3 mt-5 mb-5 bg-white">
            <h2 class=" fs-2 fw-bold  mb-3 text-center ">FAQS</h2>
            <div class="row d-flex flex-column flex-md-row  justify-content-center  align-items-center gap-2 ">
                <?php for ($i = 0; $i < 8; $i++) : ?>
                    <div class="col-12 col-md-5">
                        <div class="accordion accordion-flush" id="accordionFlushExample<?php echo $i; ?>">
                            <div class="accordion-item active" style="width: 100%;">
                                <h2 class="accordion-header" style="width: 100%;">
                                    <button style="width: 100%; color:#802A8F;" class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapseOne<?php echo $i; ?>">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="flush-collapseOne<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample<?php echo $i; ?>">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

                <!-- php Ends Here-->
            </div>
        </div></br>
        <footer>
            <h3 style="padding: 20px;">@ Ciphar oncology pvt Ltd</h3>
        </footer>

</body>

</html>