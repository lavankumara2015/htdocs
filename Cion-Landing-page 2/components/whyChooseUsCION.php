

<div class="why-cion-smalldevice-container">
            <h2>Why Choose Us <br />
                <span>CION Cancer Clinics</span>
            </h2>
            <span></span>
            <div class="whycion_card_maincontainer">
                <?php foreach ($smallDevicesWhyCionCardData as $eachCardData):?>
                    <div class="whyCion__cardcontainer">
                        <img src="<?php echo $eachCardData[0]; ?>" alt="" />
                        <p><?php echo $eachCardData[1];?></p>
                    </div>
                <?php endforeach;?>
            </div>
            <button>About OUR CLINICS</button>
        </div>