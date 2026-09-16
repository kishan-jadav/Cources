<?php
include 'connect.php';


$sql = "CREATE TABLE students(
        firstname VARCHAR(15),
        lastname VARCHAR(15),
        gender VARCHAR(10),
        address TEXT(30),
        hobby VARCHAR(15)
)";

if (mysqli_query($connect, $sql)) {
    echo "Table students created successfully.";
} else {
    echo "Table students not created.";
}

mysqli_close($connect);
