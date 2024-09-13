<!DOCTYPE html>
<html>
<head>
    <title>POST Form Example</title>
</head>
<body>
    <!-- HTML form with POST method -->
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the name and email from the POST request
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        // Display the entered information
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    }
    ?>
</body>
</html>
