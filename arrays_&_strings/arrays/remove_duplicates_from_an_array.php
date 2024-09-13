<?php
// Define an array with duplicate values
$numbers = array(1, 2, 2, 3, 4, 4, 5);

// Remove duplicates using array_unique()
$uniqueNumbers = array_unique($numbers);

// Output the resulting array
print_r($uniqueNumbers); // Output: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 [6] => 5 )
?>
