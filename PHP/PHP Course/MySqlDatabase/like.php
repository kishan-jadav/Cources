<?php
include 'connect.php';

$sql = "SELECT *
        FROM students 
        WHERE sname LIKE 'm%' ";

$result = mysqli_query($connect, $sql);

// echo "<pre>";
// print_r ($result);
// echo "</pre>";

if(mysqli_num_rows($result) > 0):
    while ($x = mysqli_fetch_assoc($result)):
        echo "Name: " .$x['sname']."<br/>";
    endwhile;
else:
    echo "0 Result found.";
endif;

mysqli_close($connect);
?>