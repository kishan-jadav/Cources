<?php

    include 'connect.php';

    $sql = "SELECT ProductName
            FROM Products
            WHERE EXISTS(
                SELECT quantity
                FROM orderdetails
                WHERE orderdetails.quantity = 10
            )";
    
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0):
        while($row = mysqli_fetch_assoc($result)):
            echo "Employee Name: " .$row['firstname']. "<br>";
        endwhile;
    else:
        echo "Match not found.";
    endif;

    mysqli_close($connect);

?>