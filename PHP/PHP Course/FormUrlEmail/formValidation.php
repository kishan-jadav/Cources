<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Email and Url validation </title>

    <style>
        .error{
            color: red;
        }
    </style>

</head>
<body>
    <?php 
        $name = $email = $website = $comment = "";
        $nameErr = $emailErr = $websiteErr = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty(test_input($_POST["name"]))){
                $nameErr = "Name is required";
            }else{
                $name = test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                    $nameErr = "Only leters and white space allowed";
                }
            }

            if(empty(test_input($_POST["email"]))){
                $emailErr = "Email is required";
            }else{
                $email = test_input($_POST["email"]);
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }
            }

            if(empty(test_input($_POST["url"]))){
                $websiteErr = "Website url is required";
            }else{
                $website = test_input($_POST["url"]);
                if(!filter_var($website,FILTER_VALIDATE_URL)){
                    $websiteErr = "Enter valid url";
                }
            }

            if(empty(test_input($_POST["comment"]))){
                $comment = "";
            }else{
                $comment = test_input($_POST["comment"]);
            }
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <h2>Form Email & URL validation</h2>

        Name: <input type="text" name="name" ><span class="error">* <?php echo $nameErr?></span><br><br>
        Email: <input type="email" name="email"><span class="error">* <?php echo $emailErr?></span> <br><br>
        Website: <input type="url" name="url"><span class="error">* <?php echo $websiteErr?></span><br><br>
        Comment: <textarea name="comment" type="text" rows="4" cols="40"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>

    <?php 
        echo "<h2>Output : </h2>";

        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
    ?>
</body>
</html>