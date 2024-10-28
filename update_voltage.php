<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voltage = $_POST['voltage'];

    // Get the current time (server time)
    date_default_timezone_set('America/Lima');
    $currentTime = date("Y-m-d g:i:s A");

    // Save to a file (or you can insert it into a database)
    $contents = file_get_contents("voltage.txt");
    $file = fopen("voltage.txt", "w");
    fwrite($file,
        "Voltage: " . $voltage .
        ", " . "Time: " . $currentTime . "\n" .
        $contents
    );
    fclose($file);

    echo "Temperature updated successfully!";
} else {
    echo "No data posted!";
}
?>

