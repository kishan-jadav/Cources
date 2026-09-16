<?php
    include 'connect.php';

    // $sql = "UPDATE students SET sname='Naresh' WHERE sname='vishal' ";
    $sql = "UPDATE students 
            SET sname='Vishal' 
            WHERE rno=3 ";

    if(mysqli_query($connect, $sql)):
        echo "Record updated successfully.";
    else:
        echo "Record not updated.";
    endif;

    mysqli_close($connect);
?>