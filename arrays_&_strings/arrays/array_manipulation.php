<?php
// Create an array with 3 fruits
$fruits = array("Apple", "Banana", "Cherry");

// Add 2 more fruits using array_push()
array_push($fruits, "Orange", "Grapes");

// Remove the last fruit using array_pop()
array_pop($fruits);

// Display the resulting array
print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange )
?>
