<?php
// Start the session
session_start();

// Set the session timeout duration (in seconds)
$timeout_duration = 60;

// Predefined username and password
$correctUsername = "admin";
$correctPassword = "password123";

// Check if the form has been submitted for login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'], $_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Validate the credentials
    if ($username === $correctUsername && $password === $correctPassword) {
        // Store the username and the current time in the session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['last_activity'] = time();
    } else {
        echo "<p style='color:red;'>Invalid login credentials.</p>";
    }
}

// Check for session timeout
if (isset($_SESSION['last_activity'])) {
    // If the session has timed out, destroy the session
    if (time() - $_SESSION['last_activity'] > $timeout_duration) {
        session_unset();
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    // Update the last activity time
    $_SESSION['last_activity'] = time();
}

// Handle logout request
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Timeout Example</title>
</head>
<body>

<?php
// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Display welcome message and logout option
    echo "<h3>Welcome, " . $_SESSION['username'] . "!</h3>";
    echo "<p>Your session will expire after 60 seconds of inactivity.</p>";
    echo "<form method='POST' action=''>
            <input type='hidden' name='logout' value='1'>
            <input type='submit' value='Logout'>
          </form>";
} else {
    // Display the login form if the user is not logged in
    ?>
        <h2>Login</h2>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>

            <input type="submit" value="Login">
        </form>
    <?php
}
?>

</body>
</html>
