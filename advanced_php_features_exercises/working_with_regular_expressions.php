<?php
// Sample email address
$email = "test@example.com";

// Regular expression to validate an email
$regex = "/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

// Check if the email is valid using preg_match()
if (preg_match($regex, $email)) {
    echo "Valid email address.";
} else {
    echo "Invalid email address.";
}
?>
