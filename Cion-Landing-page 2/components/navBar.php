<?php

switch ($PageTitle) {
    case 'Hyderabad landing Page':
        echo '<nav>
                <div class="nav-bar">
                    <img class="nav__bar__for__small" src="assets\NavBarCompress.png" alt="navbar-small-devices"/>
                    <img class="nav__bar__Cion-logo" src="./assets/Logo.png" alt="Cion-logo" />
                    <img class="nav__bar__phone__icon" src="assets\NavPhone.png" alt="phone-icon"/>
                </div>
            </nav>';
        break;

    default:
        echo "<h2>PageTitle is not matching</h2>";
        break;
}
