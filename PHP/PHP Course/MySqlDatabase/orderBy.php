<?php 
    include 'connect.php';
    /** @var mysqli $connect */ // Yeh line VS Code ko bata degi ki $connect ek mysqli object hai

    // Orderd by
    $sql = "SELECT rno, sname, std FROM students ORDER BY sname DESC"; // ASC | DEC ordered value
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0):
        while($row = mysqli_fetch_assoc($result)){
            echo "Roll No: ".$row['rno']." Name: ".$row['sname'];
            echo "<br>";
        }
    else:
        echo "0 Results found.";
    endif;

    mysqli_close($connect);

?>

