<?php
    include 'connect.php';

$sql = "SELECT *
        FROM students 
        WHERE sname='Kishan' AND std=12 ";      // AND = banne condition true thavi joie, OR = banne mathi koi ek condition true thavi joie
        // WHERE NOT sname='Kishan' ;      // NOT = te condition sivay nu badhu print kare.

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0):
    while($row = mysqli_fetch_assoc($result)):
        echo " Name: ". $row['sname']. ", Std: " .$row['std'];
        echo "<br>";
    endwhile;
else:
        echo "0 results found !";
    
endif;

mysqli_close($connect);



?>