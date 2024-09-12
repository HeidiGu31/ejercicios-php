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

// SQL query to insert a new user
$name = "John Doe";
$email = "john.doe@example.com";
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
