<?php
    include 'connect.php';

    $sql = "SELECT ProductName FROM Products
            WHERE ProductID = ALL(
                SELECT ProductID
                FROM OrderDetails
                WHERE Quantity = 5
            )";                                     // ALL(=) subquery thi all result match thay ke nahi.
                                                    // ALL(and) ex.Price > ALL(100,200,300) -> 100,200,300 thi motu hovu joie
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