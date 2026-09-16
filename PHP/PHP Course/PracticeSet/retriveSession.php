<?php 
    session_start();
?>

<html>
    <body>
        <?php 
            if(isset($_SESSION["favcolor"])):
            echo " Color is : ".$_SESSION["favcolor"]."<br>";
            echo "Animal is : ".$_SESSION["favanimal"]."<br>";
            else:
                echo "Data not found";
            endif;
        ?>
    </body>
</html>