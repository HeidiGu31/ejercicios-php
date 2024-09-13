<?php
// The name of the CSV file
$csvFile = "data.csv";

// Data to write to the CSV file (array of arrays)
$data = array(
    array("Name", "Age", "City"),
    array("John", "30", "New York"),
    array("Jane", "25", "Los Angeles"),
    array("Doe", "40", "Chicago")
);

// Open the file in write mode
$file = fopen($csvFile, "w");

// Write each row of data to the CSV file
foreach ($data as $row) {
    fputcsv($file, $row);
}

// Close the file after writing
fclose($file);

echo "Data written to CSV file successfully.<br>";

// Open the CSV file for reading
$file = fopen($csvFile, "r");

// Check if the file was successfully opened
if ($file) {
    echo "<table border='1'>";
    // Read each row and display it in a table
    while (($row = fgetcsv($file)) !== false) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // Close the file after reading
    fclose($file);
} else {
    echo "Error reading the CSV file.";
}
?>
