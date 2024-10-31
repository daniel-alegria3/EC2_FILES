<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current = $_POST['current'];
    $power = $_POST['power'];
    $energy = $_POST['energy'];

    // Get the current time (server time)
    date_default_timezone_set('America/Lima');
    $currentTime = date("Y-m-d g:i:s A");

    // Save to a file (or you can insert it into a database)
    $contents = file_get_contents("measures.txt");
    $file = fopen("measures.txt", "w");
    fwrite($file,
        "Current: " . $current . "A, " .
        "Power: " . $power . "W, " .
        "Energy: " . $energy . "Ws, " .
        "Time: " . $currentTime . "\n" .
        $contents
    );
    fclose($file);

    echo "Measures updated successfully!";
} else {
    echo "No data posted!";
}
?>

