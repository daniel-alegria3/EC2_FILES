<?php
header("Content-Type: text/plain");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = 'location_data.txt';

    if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
        $latitude = htmlspecialchars($_POST['latitude']);
        $longitude = htmlspecialchars($_POST['longitude']);
        $data = "Latitude: $latitude, Longitude: $longitude";
        
        file_put_contents($file, $data);

        echo "Location updated successfully.";
    } else {
        echo "Latitude and longitude not provided.";
    }
} else {
    echo "Invalid request method.";
}
?>
