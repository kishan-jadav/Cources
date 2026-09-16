<?php
    include 'connect.php';

    $sql = "SELECT firstname, COUNT(id) AS TotalEmployees
    FROM employee
    GROUP BY firstname";

    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0):
        while($row = mysqli_fetch_array($result)):
            echo "Department: " .$row['firstname']. " - Total Employees: " .$row['TotalEmployees']. "<br>";
        endwhile;
    endif;

    mysqli_close($connect);
?>