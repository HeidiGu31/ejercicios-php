<!DOCTYPE html>
<html>

<head>
    <title>Form Validation Example</title>
</head>

<body>
    <?php
    // Define variables to store input values and error messages
    $name = $email = "";
    $nameErr = $emailErr = "";

    // Process form data after submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty($_POST['name'])) {
            $nameErr = "Name is required.";
        } else {
            $name = htmlspecialchars($_POST['name']);
        }

        // Validate email
        if (empty($_POST['email'])) {
            $emailErr = "Email is required.";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        } else {
            $email = htmlspecialchars($_POST['email']);
        }
    }
    ?>

    <!-- Form with validation -->
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span style="color:red;"><?php echo $nameErr; ?></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span style="color:red;"><?php echo $emailErr; ?></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Display entered values if there are no errors
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr) {
        echo "<h3>Form Data Submitted:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    }
    ?>
</body>

</html>