<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Required Fields</title>

    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body>
    <?php
        $name = $email = $website = $comment = $gender = "";
        $nameErr = $emailErr = $genderErr =  "";
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty(test($_POST["name"]))){
                 $nameErr = "Name is required";
            }else{
                $name = test($_POST["name"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }else{
                $email = test($_POST["email"]);
            }

            if(empty($_POST["website"])){
                $websiteErr = "Website is required";
            }else{
                $website = test($_POST["website"]);
            }

            if(empty($_POST["comment"])){
                
            }else{
                $comment = test($_POST["comment"]);
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            }else{
                $gender = $_POST["gender"];
            }


        }

        function test($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <h2>Form - Required Fields</h2>

        <p class="error">* required field</p>
        <label for="name"> Name : </label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
        <span class="error">* <?php echo $nameErr; ?></span><br><br>

        <label for="email"> Email : </label>
        <input type="email" id="email" name="email" placeholder="Enter your email">
        <span class="error">* <?php echo $emailErr; ?></span><br><br>

        <label for="website">Website : </label>
        <input type="website" id="website" name="website" placeholder="Enter your website"><br><br>

        <label for="comment">Comment : </label>
        <textarea name="comment" id="comment" rows="4" cols="40"></textarea><br><br>

        <label>Gender : </label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender" value="female"> 
        <label for="female">Female</label>

        <input type="radio" id="other" name="gender" value="other"> 
        <label for="other">Other</label>
        <span class="error">* <?php echo $genderErr; ?></span> <br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
        echo "<h2>Your Output:</h2>";

        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    ?>

</body>

</html>