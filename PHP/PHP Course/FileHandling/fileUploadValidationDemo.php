<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Validation</title>
</head>

<body>
    <?php
    if (isset($_FILES['image'])) {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];

        $target_file = "images/" . $file_name; // folder path + file name
        $file_ext = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));  // file nu extension find karva

        $uploadOk = 1; // errorless che badhu

        // 1. NEW VALIDATION: Check if file is an actual image or a fake image
        // getimagesize() sirf tabhi true (array) return karega jab file real image hogi
        $check = getimagesize($file_tmp);
        if ($check !== false) {
            // File is a real image
            $uploadOk = 1;
        } else {
            echo "Error: Uploaded file is NOT a valid image.<br>";
            $uploadOk = 0;
        }

        // 2. Check if file already exists
        if (file_exists($target_file) && $uploadOk == 1) {
            echo "Error: File already exists.<br>";
            $uploadOk = 0;
        }

        // 3. File size validation (Under 5MB)
        if ($file_size > 5000000 && $uploadOk == 1) {
            echo "Error: File is too large, upload under 5MB file size.<br>";
            $uploadOk = 0;
        }

        // 4. Valid only jpg, jpeg and png extension
        if ($file_ext != "jpg" && $file_ext != "jpeg" && $file_ext != "png" && $uploadOk == 1) {
            echo "Error: Upload only .jpg, .jpeg and .png format!<br>";
            $uploadOk = 0;
        }

        // Final check:
        if ($uploadOk == 0) {
            echo "<b>Sorry, could not upload image. Please try again!</b><br>";
        } else {
            // Agar sab kuch sahi hai, toh file move karo
            if (move_uploaded_file($file_tmp, $target_file)) {
                echo "<b>Success: File Uploaded Successfully!</b>";
            } else {
                echo "Error: File not Uploaded due to server issue.";
            }
        }
    }
    ?>
    
    <br><br>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" required><br><br>
        <input type="submit" value="Upload Image">
    </form>
</body>

</html>