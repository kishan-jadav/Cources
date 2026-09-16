<?php 
    include 'connect.php';

    $sql = "SELECT sname AS StudentName, std AS Standard
            FROM students";

    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0):
        while($x = mysqli_fetch_assoc($result)):
            echo "Name : " .$x['StudentName']. ", Standard : " .$x['Standard'];
            echo "<br>";
        endwhile;
    endif;

    mysqli_close($connect);

?>