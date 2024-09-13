<?php
// Define a MathOperations class
class MathOperations
{
    // Static method to add two numbers
    public static function add($a, $b)
    {
        return $a + $b;
    }
}

// Call the static method without creating an instance of the class
$result = MathOperations::add(10, 5);

// Output the result
echo "The sum is: " . $result;
?>
