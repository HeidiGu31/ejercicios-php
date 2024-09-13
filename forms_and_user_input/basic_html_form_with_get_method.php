<!DOCTYPE html>
<html>

<head>
    <title>GET Form Example</title>
</head>

<body>
    <!-- HTML form with GET method -->
    <form method="GET" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if the form has been submitted
    if (isset($_GET['name'])) {
        // Get the name from the URL and display it
        $name = htmlspecialchars($_GET['name']);
        echo "Hello, " . $name . "!";
    }
    ?>
</body>

</html>