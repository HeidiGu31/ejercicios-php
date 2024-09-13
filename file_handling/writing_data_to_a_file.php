<?php
// The name of the file
$filename = "example.txt";

// The content to write to the file
$content = "This is a simple line of text.\n";

// Open the file in append mode (creates the file if it doesn't exist)
$file = fopen($filename, "a");

// Check if the file was successfully opened
if ($file) {
    // Write the content to the file
    fwrite($file, $content);

    // Close the file after writing
    fclose($file);

    echo "Data written to the file successfully.";
} else {
    echo "Error opening the file.";
}
?>