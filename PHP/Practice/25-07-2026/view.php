<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Data</title>
</head>

<body>
    <h2>All Data</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>City</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Gender</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $view_query = "SELECT * FROM student";

                $result = mysqli_query($connect, $view_query);

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    
                    echo "<td>" .$row['id']. "</td>";
                    echo "<td>" .$row['name']. "</td>";
                    echo "<td>" .$row['age']. "</td>";
                    echo "<td>" .$row['city']. "</td>";
                    echo "<td>" .$row['dob']. "</td>";
                    echo "<td>" .$row['email']. "</td>";
                    echo "<td>" .$row['gender']. "</td>";
                    echo "<td><a href='update.php?id=".$row['id']."'>Edit</a></td>";
                    echo "<td><a href='delete.php?id=".$row['id']."' >Delete</a></td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>

</html>