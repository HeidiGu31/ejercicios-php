<?php
// Database connection credentials
$servername = "localhost";
$username = "root";  // Adjust this to your MySQL username
$password = "";      // Adjust this to your MySQL password
$dbname = "test_db"; // Name of the database

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}

// Close the connection
mysqli_close($conn);
?>
