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

// Prepare an SQL statement
$stmt = mysqli_prepare($conn, "INSERT INTO users (name, email) VALUES (?, ?)");

// Bind parameters to the statement
$name = "Alice Smith";
$email = "alice.smith@example.com";
mysqli_stmt_bind_param($stmt, "ss", $name, $email);

// Execute the prepared statement
if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
