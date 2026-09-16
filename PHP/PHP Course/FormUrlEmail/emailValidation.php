<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>

<body>

    <?php
        $email = "kishanjadav366@gmail.com";

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "$email is a valid email address";
        }else{
            echo "$email is not a valid email address";
        }

        // using filter_var() function to validate email address


    ?>
</body>

</html>