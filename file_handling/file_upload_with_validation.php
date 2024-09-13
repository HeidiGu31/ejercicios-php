<!DOCTYPE html>
<html>
<head>
    <title>File Upload Example</title>
</head>
<body>
    <!-- File upload form -->
    <form method="POST" enctype="multipart/form-data" action="">
        <label for="file">Upload an image:</label>
        <input type="file" id="file" name="file"><br><br>
        <input type="submit" value="Upload">
    </form>

    <?php
    // Check if a file has been uploaded
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
        $uploadDir = 'uploads/'; // Directory to store uploaded files
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);
        $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
        $fileSize = $_FILES['file']['size'];

        // Validate the file is an image
        $check = getimagesize($_FILES['file']['tmp_name']);
        if ($check === false) {
            echo "File is not an image.";
            exit;
        }

        // Validate the file size (maximum 1MB)
        if ($fileSize > 1048576) {
            echo "File is too large. Maximum file size is 1MB.";
            exit;
        }

        // Validate the file type (only JPG, PNG, and GIF allowed)
        if ($fileType != "jpg" && $fileType != "png" && $fileType != "gif") {
            echo "Only JPG, PNG, and GIF files are allowed.";
            exit;
        }

        // Attempt to move the uploaded file to the designated directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "File uploaded successfully: " . basename($_FILES['file']['name']);
        } else {
            echo "Error uploading file.";
        }
    }
    ?>
</body>
</html>
