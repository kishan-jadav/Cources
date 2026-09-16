<?php
include 'connect.php';

// get id from url
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location: index.php");
    exit();
}

// fetch old data
$query = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

// string to array convert
$hobbies_array = explode(",", $row['hobby']);

// update
if (isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $hobby = isset($_POST['hobby']) ? implode(",", $_POST['hobby']) : "";

    $update_sql = "UPDATE students SET 
                    firstname='$firstname', 
                    lastname='$lastname', 
                    gender='$gender', 
                    address='$address', 
                    hobby='$hobby' 
                    WHERE id=$id";

    if (mysqli_query($connect, $update_sql)) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 20px;">
    <h2>Edit Student</h2>
    <form action="" method="POST">
        <label>First Name:</label><br>
        <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male" <?php if ($row['gender'] == 'Male') echo 'checked'; ?> required> Male
        <input type="radio" name="gender" value="Female" <?php if ($row['gender'] == 'Female') echo 'checked'; ?> required> Female<br><br>

        <label>Address:</label><br>
        <textarea name="address" required><?php echo $row['address']; ?></textarea><br><br>

        <label>Hobby:</label><br>
        <input type="checkbox" name="hobby[]" value="Reading" <?php if (in_array("Reading", $hobbies_array)) echo 'checked'; ?>> Reading
        <input type="checkbox" name="hobby[]" value="Traveling" <?php if (in_array("Traveling", $hobbies_array)) echo 'checked'; ?>> Traveling
        <input type="checkbox" name="hobby[]" value="Sports" <?php if (in_array("Sports", $hobbies_array)) echo 'checked'; ?>> Sports<br><br>

        <input type="submit" name="update" value="Update Data">
        <a href="index.php">Cancel</a>
    </form>
</body>

</html>