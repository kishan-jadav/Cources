<?php
    include 'connect.php';

    $sql = "DELETE FROM students WHERE rno='5' ";
    
    if (mysqli_query($connect, $sql)):
        echo "Record deleted successfully";
    else:
        echo "Error: deleting record: " . mysqli_error($connect);
    endif;

    mysqli_close($connect);


?>