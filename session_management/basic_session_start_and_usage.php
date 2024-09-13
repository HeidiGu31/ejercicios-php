<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    // Store the user's name in a session variable
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
}

// Check if the user requested to clear the session
if (isset($_POST['clear_session'])) {
    // Destroy the session and redirect to the same page
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Management - Store User Name</title>
</head>
<body>
    <!-- Form to enter user's name -->
    <form method="POST" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

    <!-- Display the stored session value -->
    <?php
    if (isset($_SESSION['name'])) {
        echo "<h3>Hello, " . $_SESSION['name'] . "!</h3>";
    }
    ?>

    <!-- Button to clear session -->
    <form method="POST" action="">
        <input type="hidden" name="clear_session" value="1">
        <input type="submit" value="Clear Session">
    </form>
</body>
</html>
