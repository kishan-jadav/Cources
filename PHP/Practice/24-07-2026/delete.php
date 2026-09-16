<?php
include 'db.php';

if(isset($_GET['roll'])):
    $roll = $_GET['roll'];

    $delete_query = "DELETE FROM student
                WHERE roll = $roll";

    if(mysqli_query($connect, $delete_query)):
        header("Location: view.php");
    else:
        echo "Error deleting record:" . mysqli_error($connect);
    endif;
    
else:
    header("Location: view.php");
    exit();

endif;

?>