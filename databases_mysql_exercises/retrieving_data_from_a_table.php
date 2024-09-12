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

// SQL query to retrieve all users
$sql = "SELECT id, name, email FROM users";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output the data of each row
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the connection
mysqli_close($conn);
?>
