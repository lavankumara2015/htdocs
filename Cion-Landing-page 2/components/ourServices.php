<?php 
switch ($PageTitle) {
    case 'Hyderabad landing Page':
        echo '
        <div class="our-services-container">
            <div class="our__services">
                <h1 class="our__services__h1">OUR <span>SERVICES</span></h1>
                <span class="our__services__span"></span>
                <p>We are your companions in your journey to fight cancer. Our professional services are focused on offering the best treatment that you can get, supported by an empathetic integrative care team who will help you manage your life through treatment and beyond.</p>
            </div>
            <div class="our-services-card-container">';
            
        foreach($ourServices as $details) {
            echo '
                <div class="our-services-card">
                    <img src="' . $details[0] . '" alt="' . $details[1] . '"/>
                    <h1>' . $details[1] . '</h1>
                    <p>' . $details[2] . '</p>
                </div>';
        }
        echo '
            </div>
        </div>';
        break;
    default:
        echo "<h2>PageTitle is not matching</h2>";
        break;
} 
?>
