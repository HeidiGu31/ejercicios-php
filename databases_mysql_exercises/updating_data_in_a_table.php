<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to update a user's email
$id = 1; // Update the user with id 1
$newEmail = "new.email@example.com";
$sql = "UPDATE users SET email='$newEmail' WHERE id=$id";

// Execute the query
if (mysqli_query($conn, $sql)) {
    if (mysqli_affected_rows($conn) > 0) {
        echo "Record updated successfully.";
    } else {
        echo "No records were updated.";
    }
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
