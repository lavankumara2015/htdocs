<?php include("./arrays.php") ?>

<?php

// Check if cityId parameter is provided in the request
if (isset($_GET['cityId'])) {
    $cityId = $_GET['cityId'];

    // Find the city data corresponding to the provided cityId
    $subCityContent = '';
    foreach ($citiAndData as $cityData) {
        if ($cityData['id'] === $cityId) {
            // Assuming 'centers' key contains the sub-city data
            foreach ($cityData['centers'] as $center) {
                
                $subCityContent .= '<div>';
                $subCityContent .= '<h3>' . $center['center_name'] . '</h3>';
                $subCityContent .= '<p>' . $center['center_address'] . '</p> <button>Call Us</button>  <button  onclick=" updateSubCities(\'' . $center['map_url'] . '\') ">Directions</button>';
                $subCityContent .= '</div>';
            }
            break;
        }
    }

    // Return the sub-city content as HTML response
    echo $subCityContent;
} else {
   
    http_response_code(400);
    echo 'Error: City ID parameter is missing.';
}