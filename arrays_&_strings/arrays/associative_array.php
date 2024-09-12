<?php
// Create an associative array with countries as keys and capitals as values
$countries = array("USA" => "Washington D.C.", "UK" => "London", "France" => "Paris");

// Loop through the associative array and output each country and its capital
foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
?>
