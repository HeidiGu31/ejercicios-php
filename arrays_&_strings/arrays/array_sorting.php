<?php
// Define an array of random numbers
$numbers = array(4, 2, 8, 1, 5);

// Sort the array in ascending order using sort()
sort($numbers);
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 5 [4] => 8 )

// Sort the array in descending order using rsort()
rsort($numbers);
print_r($numbers); // Output: Array ( [0] => 8 [1] => 5 [2] => 4 [3] => 2 [4] => 1 )
?>
