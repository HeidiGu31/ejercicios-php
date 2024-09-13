<?php
// The name of the file to delete
$filename = "example.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Attempt to delete the file
    if (unlink($filename)) {
        echo "File deleted successfully.";
    } else {
        echo "Error deleting the file.";
    }
} else {
    echo "The file does not exist.";
}
?>
