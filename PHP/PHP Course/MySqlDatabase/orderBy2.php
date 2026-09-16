<?php
include 'connect.php';

$sql = "SELECT rno, sname 
        FROM students
        ORDER BY sname, rno ASC ";   // ASC | DESC

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0):
    while($row = mysqli_fetch_assoc($result)){
        echo "Roll: " .$row['rno']. ", Name: " .$row['sname'];
        echo "<br>";
    }
endif;

mysqli_close($connect);

?>