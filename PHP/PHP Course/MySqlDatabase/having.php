<?php
    include 'connect.php';

    $sql = "SELECT firstname, COUNT(id) AS CustomerID
            FROM employee
            GROUP BY firstname
            HAVING COUNT(id) > 2;
            ";

    $result = mysqli_query($connect, $sql);

    if(!$result):
        echo "Connection Faied.";
    endif;

    if(mysqli_num_rows($result) > 0):
        while($row = mysqli_fetch_assoc($result)):
            echo "Name: " .$row['firstname']. " - Count: " .$row['CustomerID']. "<br>";
        endwhile;
    endif;

    mysqli_close($connect);
        

?>