<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <?php
    $name = $email = $gender = $comments = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["username"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comments = test_input($_POST["comments"]);
        if (isset($_POST["gender"])):       // check variable is declared and not null
            $gender = test_input($_POST["gender"]);
        endif;
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>PHP Form Validation Example</h2>
        Enter your name: <input type="text" name="username" placeholder="Enter your name"><br><br>
        Enter your email: <input type="email" name="email" placeholder="Enter your email"><br><br>
        Enter your website: <input type="text" name="website" placeholder="Enter your website"><br><br>
        Comments: <textarea name="comments" placeholder="Enter your comments" rows="5" cols="40"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other<br><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    echo "<h2>Your Output:</h2>";

    echo "Name: " . $name;
    echo "<br>";
    echo "Email: " . $email;
    echo "<br>";
    echo "Website: " . $website;
    echo "<br>";
    echo "Comments: " . $comments;
    echo "<br>";
    echo "Gender: " . $gender;
    ?>
</body>

</html>