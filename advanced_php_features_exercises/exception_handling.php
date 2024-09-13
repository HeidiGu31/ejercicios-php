<?php
// Function to divide two numbers
function divide($num1, $num2)
{
    if ($num2 == 0) {
        throw new Exception("Division by zero error.");
    }
    return $num1 / $num2;
}

try {
    // Attempt to divide two numbers
    echo divide(10, 0);
} catch (Exception $e) {
    // Catch and display the exception message
    echo "Error: " . $e->getMessage();
}
?>
