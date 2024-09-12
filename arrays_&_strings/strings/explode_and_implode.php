<?php

/* Explode */
// Define a sentence
$sentence = "PHP is fun and powerful";

// Split the sentence into an array using explode()
$words = explode(" ", $sentence);

// Output the resulting array
print_r($words); // Output: Array ( [0] => PHP [1] => is [2] => fun [3] => and [4] => powerful )

/* Implode */
// Define an array of words
$words = array("PHP", "is", "fun", "and", "powerful");

// Combine the array into a string using implode()
$sentence = implode(" ", $words);

// Output the resulting string
echo $sentence; // Output: PHP is fun and powerful
?>
