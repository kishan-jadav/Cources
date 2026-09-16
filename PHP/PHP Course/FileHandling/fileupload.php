<?php
    if(isset($_FILES["image"])){
        
        // print_r($_FILES);
        $file_name = $_FILES["image"]["name"];
        $file_size = $_FILES["image"]["size"];
        $file_temp = $_FILES["image"]["tmp_name"];
        
        $target_file = "images/" . $file_name; // jya image save karvi che te folder path + file name
        $file_ext = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // File ka extension (jpg, png) nikalne ke liye

        $uploadOk = 1; // 1 ka matlab sab theek hai, 0 ka matlab error hai

        // 1. Check if File Already Exists (Agar file pehle se folder mein hai)
        if(file_exists($target_file)){
            echo "Error: Yeh file pehle se exist karti hai!<br>";
            $uploadOk = 0;
        }
    
        // 2. Limit File Size (2MB = 2000000 bytes tak ki limit)
        if($file_size > 2000000){
            echo "Error: File ki size bohot badi hai. Sirf 2MB tak allow hai!<br>";
            $uploadOk = 0;
        }

        // 3. Limit File Type (Sirf JPG, JPEG aur PNG allow karna)
        if($file_ext != "jpg" && $file_ext != "png" && $file_ext != "jpeg"){
            echo "Error: Sirf JPG, JPEG, aur PNG files allow hain!<br>";
            $uploadOk = 0;
        }

        // Final Check: Agar $uploadOk 0 ho gaya (matlab koi error aayi)
        if($uploadOk == 0){
            echo "Sorry, aapki file upload nahi hui.";
        } else {
            // Agar sab theek hai ($uploadOk == 1), tabhi move_uploaded_file chalega
            if(move_uploaded_file($file_temp, $target_file)){
                echo "File Uploaded Successfully !";
            }else{
                echo "Could not upload the file.";
            } 
        }
    }
?>

<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">   <!-- enctype = encription type - files,photo,etc. upload karva mate use thay -->
            <input type="file" name="image" required> <!-- required lagaya taaki empty form submit na ho -->
            <input type="submit">
        </form>
    </body>
</html>