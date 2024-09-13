<?php
// The name of the file
$filename = "example.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Open the file in read mode
    $file = fopen($filename, "r");

    // Check if the file was successfully opened
    if ($file) {
        // Read the file content and display it
        while (($line = fgets($file)) !== false) {
            echo $line . "<br>";
        }

        // Close the file after reading
        fclose($file);
    } else {
        echo "Error opening the file.";
    }
} else {
    echo "The file does not exist.";
}
?>
