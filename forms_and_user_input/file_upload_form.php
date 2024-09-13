<!DOCTYPE html>
<html>
<head>
    <title>File Upload Example</title>
</head>
<body>
    <!-- File upload form -->
    <form method="POST" enctype="multipart/form-data" action="">
        <label for="file">Upload a file:</label>
        <input type="file" id="file" name="file"><br><br>
        <input type="submit" value="Upload">
    </form>

    <?php
    // Check if a file has been uploaded
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
        $uploadDir = 'uploads/'; // Directory to store uploaded files
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);

        // Attempt to move the uploaded file to the designated directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "File uploaded successfully: " . $_FILES['file']['name'];
        } else {
            echo "Error uploading file.";
        }
    }
    ?>
</body>
</html>
