<?php
include 'db.php';

//insert data into table
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $sql = "INSERT INTO task (title, description, date)
                VALUES ('$title', '$description', '$date')";

    if (mysqli_query($connect, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>

<html>

<head>
    <title>Task Manager</title>
</head>

<body>

    <form method="POST" action="">
        <h2>Task Manager</h2>

        <label for="title">Title: </label>
        <input type="text" name="title" id="title" required><br><br>

        <label for="desc">Description: </label>
        <textarea name="description" id="desc"></textarea>

        &nbsp;<input name="date" type="date" required><br><br>

        <input type="submit" name="submit" value="Save Task">
    </form>



    <hr>

    <h2>Task List</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>

        <?php
        $query = "SELECT * FROM task";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0):
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>
                            <a href='edit.php ? id=" . $row['id'] . "'>Edit</a> | 
                            <a href='delete.php ? id=" . $row['id'] . "'>Delete</a>
                            </td>";
                echo "</tr>";
            }
        endif;

        ?>


    </table>
</body>

</html>