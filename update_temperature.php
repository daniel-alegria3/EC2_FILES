<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];

    // Get the current time (server time)
    date_default_timezone_set('America/Lima');
    $currentTime = date("Y-m-d g:i:s A");

    // Save to a file (or you can insert it into a database)
    $contents = file_get_contents("temperature.txt");
    $file = fopen("temperature.txt", "w");
    fwrite($file,
        "Temperature: " . $temperature .
        "°C, Humidity: " . $humidity .
        "%, Time: " . $currentTime . "\n" .
        $contents
    );
    fclose($file);

    echo "Temperature updated successfully!";
} else {
    echo "No data posted!";
}
?>

