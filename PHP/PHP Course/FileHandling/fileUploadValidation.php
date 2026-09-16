<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Validation</title>
    <h2>File Upload Validation</h2>
</head>

<body>
    <?php
    if (isset($_FILES["image"])) {
        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";

        $file_name = $_FILES['image']['name'];
        $file_temp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];

        $target_file = "images/" . $file_name; // jya save karvi che te image folder + filename
        $file_ext = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // file extension find karva

        $uploadOk = 1;  // 1 = badhu ok che, 0 = error che.

        // check if file already exists 
        if (file_exists($target_file)) {
            echo "File is already exist.<br>";
            $uploadOk = 0;
        }

        // check file size
        if ($file_size > 5000000) {
            echo "File is too large, upload under 5MB size.<br>";
            $uploadOk = 0;
        }

        // Allow certain file formate(allow jpg, jpeg and png only)
        if ($file_ext != "jpg" && $file_ext != "jpeg" && $file_ext != "png") {
            echo "Upload only JPG, JPEG and PNG file formate.<br>";
            $uploadOk = 0;
        }

        // Final check: jo uploadOk = 0(error) hoy to ..
        if ($uploadOk == 0) {
            echo "Sorry, could not upload your image.";
        } else {
            // jo   uploadOk = 1(badhu ok) che to else part chalse...
            if (move_uploaded_file($file_temp, $target_file)) {
                echo "File Uploaded Successfully";
            } else {
                echo "Could not upload the file.";
            }
        }
    }

    ?>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="image" required><br><br>
        <input type="submit">
    </form>
</body>

</html>