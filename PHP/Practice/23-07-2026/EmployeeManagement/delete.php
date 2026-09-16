<?php
include 'db.php';

// get id from url
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete_query = "DELETE FROM employee WHERE id=$id ";

    if(mysqli_query($connect, $delete_query)){
        header("Location: index.php");
    }else{
        echo "Error deleting record:".mysqli_error($connect);
    }

}else{
    header("Location: index.php");
    exit();
}


?>