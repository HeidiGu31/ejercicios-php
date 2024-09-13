<?php
// Sample string
$string = "Hello world! This is PHP.";

// Regular expression to replace spaces with underscores
$result = preg_replace("/\s+/", "_", $string);

// Output the result
echo $result; // Output: Hello_world!_This_is_PHP.
?>
