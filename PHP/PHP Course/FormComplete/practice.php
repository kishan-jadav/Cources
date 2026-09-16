<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
    <style>
        .error{
            color: red; 
        }
    </style>


    <h2>PHP Form Validation</h2>
</head>
<body>
    
    <?php
        $name = $email = $url = $comment = $gender = "";
        $nameErr = $emailErr = $urlErr = $commentErr = $genderErr = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            }else{
                $name = $_POST["name"];
                // name validation 
                if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                    $nameErr = "Only letter and whitespace allowed !";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }else{
                $email = $_POST["email"];
                // email validation check
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Enter correct email ";
                }
            }

            if(empty($_POST["url"])){
                $urlErr = "URL field is required";
            }else{
                $url = $_POST["url"];
                // url validation check
                if(!filter_var($url,FILTER_VALIDATE_URL)){
                    $urlErr = "url is not valide";
                }
            }

            if(empty($_POST["comment"])){
                $commentErr = "";
            }else{
                $comment = $_POST["comment"];
            }


            if(empty($_POST["gender"])){
                $genderErr = "Select ant one";
            }else{
                $gender = $_POST["gender"];
            }
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        Name: 
        <input type="text" name="name" value="<?php echo $name ?>">
        <span class="error"> * <?php echo $nameErr; ?> </span> <br><br>

        Email: 
        <input type="email" name="email" value="<?php echo $email ?>"> 
        <span class="error"> * <?php echo $emailErr; ?></span><br><br>

        URL: 
        <input type="ulr" name="url" value="<?php echo $url ?>"> 
        <span class="error"> * <?php echo $urlErr ?></span><br><br>

        Comment:
        <input type="comment" name="comment" value="<?php echo $comment ?>"> 
        <br><br>

        Gender: &nbsp;
        <input type="radio" name="gender" value="male" <?php if(isset($gender) && $gender =="male") echo "Checked" ?>> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other 
        <span class="error"> * <?php echo $genderErr; ?></span><br><br><br>

        <input type="submit" name="submit" value="submit">

    </form>

    <?php
        echo "<h3>Output:</h3>";
        echo $name;
        echo "<br><br>";
        echo $email;
        echo "<br><br>";
        echo $url;
        echo "<br><br>";
        echo $comment;
        echo "<br><br>";
        echo $gender;
    ?>


</body>
</html>