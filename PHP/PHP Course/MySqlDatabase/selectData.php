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

$sql ="SELECT rno, sname, std, dob 
        FROM students";
// $sql = "SELECT *FROM students";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0):
    while($row = mysqli_fetch_assoc($result)){
        echo "rno: ".$row["rno"]." - sname: ".$row["sname"]." std: ".$row["std"]." dob: ".$row["dob"];
        echo "<br>";
        }
else:
    echo "0 results";
endif;

mysqli_close($conn);
?>