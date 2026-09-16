<!DOCTYPE html>
<html>
<head>
    <style>
        .error{
            color : red;
        }
    </style>
</head>
<body>

<?php
	$name = $email = $url = $comment = $gender = "";
    $nameErr = $emailErr = $urlErr = $commentErr = $genderErr = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    	if(empty(test($_POST["name"]))){
        	$nameErr = "Name field is required";
        }else{
        	$name = test($_POST["name"]);
            // check name validation
        	if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            	$nameErr = "Only character and whitespace allowed !";
            }
        }

        if(empty(test($_POST["email"]))){
            $emailErr = "Email field is required";
        }else{
            $email = test($_POST["email"]);
            // check email validation
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Enter Correct email";
            }
        }

        if(empty(test($_POST["url"]))){
            $urlErr = "URL field is required";
        }else{
            $url = test($_POST["url"]);
            // check url validation
            if(!filter_var($url,FILTER_VALIDATE_URL)){
                $urlErr = "Enter correct url";
            }
        }

        if(empty(test($_POST["comment"]))){
            $commentErr="";
        }else{
            $comment = test($_POST["comment"]);
        }

        if(empty($_POST["gender"])){
            $genderErr = "Select any one.";
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
	<h2>Keep the value in the form</h2>
    <p class= "error">* Reuired Field</p>
    Name : <input type="text" name="name" value="<?php echo $name ?>">
    <span class="error"> * <?php echo $nameErr; ?></span><br><br>

    Email : <input type="email" name="email" value="<?php echo $email ?>">
    <span class="error"> * <?php echo "$emailErr"; ?></span><br><br>

    URL : <input type="url" name="url" value="<?php echo $url ?>">
    <span class="error"> * <?php echo $urlErr; ?></span><br><br>

    Comment : <textarea name="comment" rows="4" cols="30" value="<?php echo $comment ?>"></textarea><br><br>
    
    Gender : 
    	<input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked"; ?> value="male"> Male
        <input type="radio" name="gender" value="female" <?php if(isset($gender) && $gender=="female") echo "checked";?>> Female
        <input type="radio" name="gender" value="other" <?php if(isset($gender) && $gender == "other") echo "checked";?>> Other <span class="error"> * <?php echo $genderErr; ?></span> <br><br><br>
    
    <input type="submit" name="submit" value="submit">
</form>

<?php 
	echo "<h3>Output:</h3>";
    
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $url;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
?>

</body>
</html>
