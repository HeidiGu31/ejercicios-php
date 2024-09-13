<!DOCTYPE html>
<html>
<head>
    <title>Radio Button Example</title>
</head>
<body>
    <!-- Form with radio buttons -->
    <form method="POST" action="">
        <label>Select your gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male<br>
        <input type="radio" name="gender" value="Female"> Female<br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted and gender is selected
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['gender'])) {
        // Get the selected gender
        $gender = htmlspecialchars($_POST['gender']);

        // Display the selected gender
        echo "You selected: " . $gender;
    } else {
        echo "Please select your gender.";
    }
    ?>
</body>
</html>
