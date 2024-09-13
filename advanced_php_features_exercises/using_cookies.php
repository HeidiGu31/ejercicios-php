<?php
// Set the cookie if not already set
if (!isset($_COOKIE['username'])) {
    setcookie("username", "John Doe", time() + 3600); // Expires in 1 hour
    echo "Cookie has been set.<br>";
}

// Check if the cookie is set
if (isset($_COOKIE['username'])) {
    echo "Welcome, " . $_COOKIE['username'] . "!<br>";
} else {
    echo "No cookie found.<br>";
}

// Delete the cookie if the form is submitted
if (isset($_POST['delete_cookie'])) {
    setcookie("username", "", time() - 3600); // Set expiration time in the past to delete
    echo "Cookie has been deleted.";
}
?>

<!-- Button to delete the cookie -->
<form method="POST" action="">
    <input type="submit" name="delete_cookie" value="Delete Cookie">
</form>
