<?php
// Create a multidimensional array storing names and ages
$people = array(
    array("name" => "John", "age" => 30),
    array("name" => "Jane", "age" => 25),
    array("name" => "Doe", "age" => 40)
);

// Loop through the array to display the name and age of each person
foreach ($people as $person) {
    echo $person['name'] . " is " . $person['age'] . " years old.<br>";
}
?>
