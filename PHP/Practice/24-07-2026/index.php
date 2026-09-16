<?php
include 'db.php';

if (isset($_POST['submit'])):
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $standard = $_POST['standard'];
    $gender = $_POST['gender'];

    $insert_query = "INSERT INTO student (firstname, middlename, lastname, dob, city, standard, gender)
                    VALUE ('$firstname', '$middlename', '$lastname', '$dob', '$city', '$standard', '$gender')";

    $result = mysqli_query($connect, $insert_query);

    $message =  "Data inserted.";
endif;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <form method="post" action="">
            <h2>STUDENT REGISTRATION FORM</h2><br><br>
            

            <label for="firstname">FIRSTNAME: </label>
            <input class="student" type="text" name="firstname" id="firstname" minlength="2" maxlength="20" pattern="^[A-Za-z\s]+$" title="Enter your name" required><br><br>

            <label for="middlename">MIDDLENAME: </label>
            <input class="student" type="text" name="middlename" id="middlename" minlength="2" maxlength="20" pattern="^[A-Za-z\s]+$" title="Enter your fathername"><br><br>

            <label for="lastname">LASTNAME: </label>
            <input class="student" type="text" name="lastname" id="lastname" minlength="2" maxlength="20" pattern="^[A-Za-z\s]+$" title="Enter your surname" required><br><br>

            <label for="dob">DATE OF BIRTH: </label>
            <input class="student" type="date" name="dob" id="dob" title="Enter your birth date" required><br><br>

            <label for="city">CITY: </label>
            <input class="student" type="city" name="city" id="city" maxlength="20" pattern="^[A-Za-z\s]+$" title="Enter your city name" required><br><br>

            <label for="standard">STANDARD: </label>
            <input class="student" type="number" name="standard" id="standard" min="1" max="12" title="Enter your current standard" required><br><br>

            <label for="gender">GENDER: </label> 
            <input class="student" type="radio" name="gender" id="gender" value="male" required> <label class="gender">Male</label>&nbsp;
            <input class="student" type="radio" name="gender" id="gender" value="female"> <label class="gender">Female</label>&nbsp;
            <input class="student" type="radio" name="gender" id="gender" value="other"> <label class="gender">Other</label><br><br>

            <label class="message"><?php echo (isset($_POST['submit'])) ? 'Data Inserted successfully.' : ''; ?></label><br><br>

            <input class="button" type="submit" value="SUBMIT" name="submit">
            <input class="button" type="reset" value="RESET" name="reset"><br><br>
            <a href="view.php">View Students List</a>

        </form>
    </div>
</body>

</html>