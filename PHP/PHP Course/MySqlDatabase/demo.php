<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect):
    echo "Database is not connected.";
else:
    echo "Database is Connected successfully!";
endif;




$sql = "INSERT INTO newdb(
    (firstname, surname)
    VALUE
    (Kishan, Jadav)
)";

if(mysqli_query($connect, $sql)):
    echo "Table created successfully.";
else:
    echo "Table not created.".mysqli_error($connect);
endif;

mysqli_close($connect);





?>