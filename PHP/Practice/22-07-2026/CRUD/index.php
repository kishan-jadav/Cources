<?php
include 'connect.php';

// Create(insert)
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $hobby = isset($_POST['hobby']) ? implode(",", $_POST['hobby']) : "";

    $sql = "INSERT INTO students (firstname, lastname, gender, address, hobby) 
            VALUES ('$firstname', '$lastname', '$gender', '$address', '$hobby')";

    if (mysqli_query($connect, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>PHP CRUD - Students</title>
</head>

<body>

    <h2>Add New Student</h2>
    <form action="" method="POST">
        <label>First Name:</label><br>
        <input type="text" name="firstname" required><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="lastname" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female<br><br>

        <label>Address:</label><br>
        <textarea name="address" required></textarea><br><br>

        <label>Hobby:</label><br>
        <input type="checkbox" name="hobby[]" value="Reading"> Reading
        <input type="checkbox" name="hobby[]" value="Traveling"> Traveling
        <input type="checkbox" name="hobby[]" value="Sports"> Sports<br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>

    <h2>Students List (Read)</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Hobby</th>
            <th>Actions</th>
        </tr>

        <?php
        // Read
        $query = "SELECT * FROM students";
        $result = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['hobby'] . "</td>";
            echo "<td>
                    <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
                    <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                </td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>