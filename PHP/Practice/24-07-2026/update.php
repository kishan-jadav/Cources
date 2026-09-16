<?php
include 'db.php';

if (isset($_GET['roll'])) {
    $roll = $_GET['roll'];
}

// get old details
$get_query = "SELECT * FROM student WHERE roll = '$roll'";
$result = mysqli_query($connect, $get_query);
$row = mysqli_fetch_assoc($result);

// update data
if (isset($_POST['update'])):

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $standard = $_POST['standard'];
    $gender = $_POST['gender'];


    $update_sql = "UPDATE student SET 
                    firstname = '$firstname', 
                    middlename = '$middlename',
                    lastname = '$lastname',
                    dob = '$dob',
                    city = '$city',
                    standard = '$standard',
                    gender = '$gender'
                WHERE roll = '$roll'
                    ";

    if (mysqli_query($connect, $update_sql)) {
        header("Location: view.php");
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }


endif;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Details</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div>
        <form method="post" action="">
            <h2>UPDATE STUDENT DETAILS</h2><br>

            <label class="roll"><?php echo $roll; ?></label><br><br>

            <label for="firstname">Firstname: </label>
            <input class="student" type="text" name="firstname" id="firstname" minlength="2" maxlength="20" title="Update your name" value="<?php echo $row['firstname']; ?>" required><br><br>

            <label for="middlename">Middlename: </label>
            <input class="student" type="text" name="middlename" id="middlename" minlength="2" maxlength="20" title="Update your father name" value="<?php echo $row['middlename']; ?>"><br><br>

            <label for="lastname">Lastname: </label>
            <input class="student" type="text" name="lastname" id="lastname" minlength="2" maxlength="20" title="Update your surname" value="<?php echo $row['lastname']; ?>" required><br><br>

            <label for="dob">Date of Birth: </label>
            <input class="student" type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>" title="Update your DOB" required><br><br>

            <label for="city">City: </label>
            <input class="student" type="city" name="city" id="city" pattern="^[A-Za-z\s]+$" title="Update your city name" value="<?php echo $row['city']; ?>" required><br><br>

            <label for="standard">Standard: </label>
            <input class="student" type="number" name="standard" id="standard" title="Update your standard" value="<?php echo $row['standard']; ?>" required><br><br>

            <label for="gender">Gender: </label>
            <input class="student" type="radio" name="gender" id="gender" value="male" <?php echo ($row['gender'] == 'male') ? 'checked' : ''  ?> required><label> Male </label>
            <input class="student" type="radio" name="gender" id="gender" value="female" <?php echo ($row['gender'] == 'female') ? 'checked' : '' ?>> <label class="gender">Female</label>
            <input class="student" type="radio" name="gender" id="gender" value="other" <?php echo ($row['gender'] == 'other') ? 'checked' : '' ?>><label> Other</label><br><br><br>

            <input class="button" type="submit" value="Update" name="update"><br><br>

            <a href="view.php">Back</a>

        </form>
    </div>
</body>

</html>