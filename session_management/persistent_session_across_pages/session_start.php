<?php
// Start the session
session_start();

// Store the user's name in a session variable
$_SESSION['name'] = "John Doe";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Start</title>
</head>
<body>
    <h2>Session has been started and the name is stored.</h2>
    <a href="session_display.php">Go to the next page</a>
</body>
</html>
