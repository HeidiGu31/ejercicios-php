<?php
// Start the session
session_start();

// Set the favorite color if submitted
if (isset($_POST['color'])) {
    $_SESSION['favorite_color'] = htmlspecialchars($_POST['color']);
}

// Display the favorite color if it's set
if (isset($_SESSION['favorite_color'])) {
    echo "Your favorite color is: " . $_SESSION['favorite_color'] . "<br>";
} else {
    echo "You haven't set a favorite color yet.<br>";
}
?>

<!-- Form to set the favorite color -->
<form method="POST" action="">
    <label for="color">Enter your favorite color:</label>
    <input type="text" name="color" id="color">
    <input type="submit" value="Set Favorite Color">
</form>
