<?php
// Define a string
$string = "I love PHP!";

// Find the position of the word "PHP" using strpos()
$position = strpos($string, "PHP");

// Output the position if found
if ($position !== false) {
    echo "The word 'PHP' is located at position $position."; // Output: The word 'PHP' is located at position 7.
}
?>
