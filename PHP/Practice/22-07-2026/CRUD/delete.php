<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // delete
    $sql = "DELETE FROM students WHERE id=$id";

    if (mysqli_query($connect, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($connect);
    }
} else {
    header("Location: index.php");
}
