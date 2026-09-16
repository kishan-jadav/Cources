<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $insert_query = "INSERT INTO student(name, age, city, dob, email, gender)
                        VALUES('$name', '$age', '$city', '$dob', '$email', '$gender')
                        ";

        if(mysqli_query($connect,$insert_query)){
            header("Location:index.php");
        }else{
            echo "Something went Wrong".mysqli_error($connect);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form method="POST" action="">
        <h2>Login Form</h2>
        Name : <input type="text" name="name"><br><br>
        Age : <input type="number" name="age"><br><br>
        City : <input type="text" name="city"><br><br>
        DOB : <input type="date" name="dob"><br><br>
        Email : <input type="email" name="email"><br><br>
        Gender : 
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other <br><br>

        <input type="submit" name="submit" value="submit"> <a href="view.php">View List</a>
    </form>
</body>

</html>