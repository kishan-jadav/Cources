<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>

    <style>
        .red{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $name=$email=$url=$comment=$gender = "";
        $nameErr=$emailErr=$urlErr=$commentErr=$genderErr="";

        if($_SERVER["REQUEST_METHOD"] == "POST"):
            if(empty($_POST["name"])):
                $nameErr = "Name is required";
            else:
                $name = test($_POST["name"]);
                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)):
                    $nameErr = "Only character and white space allowed.";
                endif;
            endif;


            if(empty($_POST["email"])):
                $emailErr = "E-mail is required";
            else:
                $email = test($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                    $emailErr = "Enter a valid email.";
                endif;                    

            endif;


            if(empty($_POST["url"])):
                $urlErr = "URL is required";
            else:
                $url = test($_POST["url"]);
                if(!filter_var($url, FILTER_VALIDATE_URL)):
                    $urlErr = "Enter a valid URL";
                endif;
            endif;


            if(empty($_POST["comment"])):
                $commentErr = "";
            else:
                $comment = test($_POST["comment"]);
            endif;


            if(empty($_POST["gender"])):
                $genderErr = "Gender is required";
            else:
                $gender = test($_POST["gender"]);
            endif;
            
        endif;


        function test($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>

    <h2>PHP Form Validattion</h2>
    <p class="red">* Required field</p>
    <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="red"> * <?php echo $nameErr; ?></span><br><br>

        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="red"> * <?php echo $emailErr; ?></span><br><br>

        Website: <input type="text" name="url" value="<?php echo $url; ?>">
        <span class="red"> * <?php echo $urlErr; ?></span><br><br>

        Comment: <textarea name="comment"></textarea><br><br>

        Gender:
            <input type="radio" name="gender" value="Male" <?php if(isset($gender) && $gender =="Male") echo "checked"; ?>> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other 
            <span class="red"> * <?php echo $genderErr; ?></span><br><br><br>
        
        <input type="submit">

    </form>

    <?php
        echo "<h2>Your Input:</h2>";

        echo "Name: $name <br><br>";
        echo "Email: $email <br><br>";
        echo "Website: $url <br><br>";
        echo "Gender: $gender <br><br>";
    ?>
</body>
</html>