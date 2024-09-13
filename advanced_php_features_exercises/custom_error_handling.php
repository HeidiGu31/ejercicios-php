<?php
// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline)
{
    // Error message format
    $errorMessage = "Error [$errno] in $errfile on line $errline: $errstr\n";

    // Log the error to a file
    error_log($errorMessage, 3, "error_log.txt");

    // Don't display the error message on the screen
    echo "An error occurred. Please check the log file.";
}

// Set the custom error handler
set_error_handler("customErrorHandler");

// Trigger an error
echo 10 / 0; // Division by zero (this will trigger a warning)
?>
