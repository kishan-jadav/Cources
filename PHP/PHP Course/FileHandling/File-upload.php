<?php
    if(isset($_FILES["image"])){
        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";

        $file_name = $_FILES["image"]["name"];
        $file_size = $_FILES["image"]["size"];
        $file_temp = $_FILES["image"]["tmp_name"];
        $file_type = $_FILES["image"]["type"];

        // syntax: (file temp name, "jya image ne upload karvi che te folder name". file name);
        if(move_uploaded_file($file_temp,"images/".$file_name)){
            echo "File Uploaded Successfully !";
        }else{
            echo "Could not upload the file.";
        } // client side ni image ne upadine server side temparory save kare
    }
?>

<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">   <!-- enctype = encription type - files,photo,etc. upload karva mate use thay -->
            <input type="file" name="image">
            <input type="submit">
        </form>
    </body>
</html>