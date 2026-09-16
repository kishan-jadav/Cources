<?php
    include 'connection.php';

    // get id 
    if($_GET['id']){
        $id = $_GET['id'];
    }

    // get old data
    $old_query = "SELECT * FROM student WHERE id='$id'";
    $result = mysqli_query($connect, $old_query);
    $row = mysqli_fetch_assoc($result);


    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $update_query ="UPDATE student SET 
                            name='$name',
                            age='$age', 
                            city='$city',
                            dob='$dob',
                            email='$email',
                            gender='$gender'
                        WHERE id='$id'
                        ";

        if(mysqli_query($connect, $update_query)){
            header("Location:view.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <form method="POST" action="">
        <h2>Update Data</h2>
        Name : <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
        Age : <input type="number" name="age" value="<?php echo $row['age']; ?>"><br><br>
        City : <input type="text" name="city" value="<?php echo $row['city'] ?>"><br><br>
        DOB : <input type="date" name="dob" value="<?php echo $row['dob']; ?>"><br><br>
        Email : <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        Gender :
        <input type="radio" name="gender" value="male" <?php if($row['gender']=='male')echo "checked"; ?> required> Male
        <input type="radio" name="gender" value="female" <?php if($row['gender']=='female')echo "checked"; ?> > Female
        <input type="radio" name="gender" value="other" <?php if($row['gender']=='other')echo "checked"; ?> > Other <br><br>

        <input type="submit" name="update" value="update"> <a href="view.php">View Data</a>
    </form>
</body>

</html>