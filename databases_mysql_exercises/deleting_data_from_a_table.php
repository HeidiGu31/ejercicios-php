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

// SQL query to delete a user
$id = 1; // Delete the user with id 1
$sql = "DELETE FROM users WHERE id=$id";

// Execute the query
if (mysqli_query($conn, $sql)) {
    if (mysqli_affected_rows($conn) > 0) {
        echo "Record deleted successfully.";
    } else {
        echo "No records were deleted.";
    }
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
