<?php
include 'db.php';

// get id from url
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    header("Location: index.php");
    exit();
}

// get old data
$query = "SELECT * FROM task WHERE id= $id";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])):
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $update_sql= "UPDATE task SET
                    title = '$title',
                    description = '$description',
                    date = '$date'
                WHERE id='$id'";
            
    if(mysqli_query($connect, $update_sql)):
        header("Location: index.php");
    else:
        echo "Error updating record: ". mysqli_error($connect);
    endif;


endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h2>Edit Task</h2>
    <form action="" method="POST">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br><br>

        <label>Description:</label>
        <textarea name="description"><?php echo $row['description']; ?></textarea>

        &nbsp;<input type="date" name="date" value="<?php echo $row['date']; ?>"><br><br>

        <input type="submit" name="update" value="Update">
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>