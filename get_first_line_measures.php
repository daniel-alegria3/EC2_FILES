<?php
    // Define the file path
    $file_path = "measures.txt";  // Replace with the correct path if needed

    // Open the file for reading
    $file = fopen($file_path, "r");

    if ($file) {
        // Read the first line of the file
        $first_line = fgets($file);

        // Close the file
        fclose($file);

        // Return the first line
        echo $first_line;
    } else {
        // Handle error if file could not be opened
        echo "Error: Unable to open the file.";
    }
?>

