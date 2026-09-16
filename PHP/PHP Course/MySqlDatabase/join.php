<?php 
    include 'connect.php';

    $sql = "SELECT employee.firstname, students.sname
    FROM employee
    INNER JOIN students ON employee.firstname = students.sname ";

    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0):
        while($row = mysqli_fetch_array($result)):
            echo "Employee Name:  " .$row['firstname']. " - Student Name: ". $row['sname']. "<br>";
        endwhile;
    endif;

    mysqli_close($connect);

?>