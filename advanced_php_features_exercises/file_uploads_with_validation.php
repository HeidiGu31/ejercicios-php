<!DOCTYPE html>
<html>
<head>
    <title>File Upload with Validation</title>
</head>
<body>
    <!-- File upload form -->
    <form method="POST" enctype="multipart/form-data">
        <label for="file">Upload a file:</label>
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="Upload">
    </form>

    <?php
    // Handle file upload
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
        $file = $_FILES['file'];

        // Check if the file is an image
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($file['type'], $allowedTypes)) {
            echo "Only JPG, PNG, and GIF files are allowed.<br>";
            exit;
        }

        // Check file size (limit: 2MB)
        if ($file['size'] > 2 * 1024 * 1024) {
            echo "File size exceeds 2MB.<br>";
            exit;
        }

        // Save the file to the uploads directory
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            echo "File uploaded successfully: " . $file['name'] . "<br>";
        } else {
            echo "Error uploading file.<br>";
        }
    }
    ?>
</body>
</html>
