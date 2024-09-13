<!DOCTYPE html>
<html>
<head>
    <title>Checkbox Example</title>
</head>
<body>
    <!-- Form with multiple checkboxes -->
    <form method="POST" action="">
        <label>Select your hobbies:</label><br>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
        <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
        <input type="checkbox" name="hobbies[]" value="Music"> Music<br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted and hobbies are selected
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hobbies'])) {
        // Get the selected hobbies
        $hobbies = $_POST['hobbies'];

        // Display the selected hobbies
        echo "Your selected hobbies are: <br>";
        foreach ($hobbies as $hobby) {
            echo "- " . htmlspecialchars($hobby) . "<br>";
        }
    } else {
        echo "No hobbies selected.";
    }
    ?>
</body>
</html>
