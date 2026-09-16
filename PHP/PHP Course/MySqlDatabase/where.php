<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT rno, sname 
        FROM students 
        WHERE rno = '6' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0):
    while($row = mysqli_fetch_assoc($result)){
        echo "Roll No. ".$row["rno"]." Name: ". $row["sname"];
        echo "<br>";
    }
else:
        echo "0 results found !";
    
endif;

mysqli_close($conn);



?>