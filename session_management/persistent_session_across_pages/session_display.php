<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Display</title>
</head>
<body>
    <h2>Retrieve Session Data</h2>

    <?php
    // Check if the session variable 'name' is set
    if (isset($_SESSION['name'])) {
        // Display the name stored in the session
        echo "Hello, " . $_SESSION['name'] . "!";
    } else {
        echo "No session data found.";
    }
    ?>
</body>
</html>
