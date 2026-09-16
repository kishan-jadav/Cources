<?php
include 'connection.php';

// get id
if($_GET['id']){
    $id=$_GET['id'];

    $delete_query = "DELETE FROM student WHERE id='$id'";

    if(mysqli_query($connect,$delete_query)){
        header("Location:view.php");
    }
}else{
    header("Location:view.php");
}


?>