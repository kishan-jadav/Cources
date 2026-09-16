<?php
    include 'connect.php';

    $sql = "SELECT ProductName FROM Products
            WHERE ProductID = ANY(
                SELECT ProductID
                FROM OrderDetails
                WHERE Quantity = 5
            )";                                     // ANY -> ochama ochi koi ek condition sathe match thay che ke nahi
                                                    // ANY(or) ex.Price > ALL(100,200,300) -> 100 or 200 or 300 mathi koi ek true thavi joie 
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0):
        while($row = mysqli_fetch_assoc($result)):
            echo "Product Name: " .$row['ProductName']. "<br>";
        endwhile;
    else:
        echo "Record not found !";
    endif;


    mysqli_close($connect);

?>