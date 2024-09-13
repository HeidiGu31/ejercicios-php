<?php
// The name of the file
$filename = "example.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Get the content of the file
    $content = file_get_contents($filename);

    // Count the number of words in the content
    $wordCount = str_word_count($content);

    // Display the word count
    echo "The file contains " . $wordCount . " words.";
} else {
    echo "The file does not exist.";
}
?>
