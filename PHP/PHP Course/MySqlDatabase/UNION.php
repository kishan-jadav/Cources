<?php

    include 'connect.php';

    $sql = "SELECT sname AS person_name FROM students
    UNION                                                  
    SELECT firstname AS person_name FROM employee";     // remove duplicate values and print values of both this table

    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0):
        while($x = mysqli_fetch_array($result)):
            echo "Name: " .$x['person_name']. "<br>";
        endwhile;
    endif;

    mysqli_close($connect);
?>  