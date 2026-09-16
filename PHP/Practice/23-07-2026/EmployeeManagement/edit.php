<?php
include 'db.php';

//get id from url
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location: index.php");
}

//get old details
$get_query = "SELECT * FROM employee WHERE id=$id";
$result = mysqli_query($connect, $get_query);
$row = mysqli_fetch_assoc($result);

//update details
if (isset($_POST['update'])):
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];

    $update_sql = "UPDATE employee SET
                    name = '$name',
                    surname = '$surname',
                    city = '$city',
                    contact = '$contact',
                    email = '$email',
                    dob = '$dob',
                    age = '$age'
                WHERE id = '$id'";

    if (mysqli_query($connect, $update_sql)):
        header("Location: index.php");
    else:
        echo "Error updating record: " . mysqli_error($connect);
    endif;
endif;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="input">
        <h2>Update employee details</h2>
        <form method="POST" action="">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" required><br><br>

            <label for="surname">Surname: </label>
            <input type="text" name="surname" id="surname" value="<?php echo $row['surname']; ?>" required><br><br>

            <label for="city">City: </label>
            <input type="text" name="city" id="city" value="<?php echo $row['city']; ?>" required><br><br>

            <label for="contact">Contact No: </label>
            <input type="tel" name="contact" id="contact" pattern="[0-9]{10}" inputmode="numeric" min="10" maxlength="10" value="<?php echo $row['contact']; ?>" required><br><br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>" required><br><br>

            <label for="dob">DOB: </label>
            <input type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>" required><br><br>

            <label for="age">Age: </label>
            <input type="number" name="age" id="age" min="18" max="80" inputmode="numeric" value="<?php echo $row['age']; ?>" required><br><br>

            <input class="button" type="submit" name="update" value="Update">
        </form>
    </div>
</body>

</html>