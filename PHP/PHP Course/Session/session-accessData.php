<?php 
    session_start();    // session use karva mate session_start() function one karvu pade che
?>

<html>
    <body>
        <?php 
            if(isset($_SESSION["favcolor"])){
                echo "favorite color is". $_SESSION["favcolor"]." <br>";
                echo "favorite animal is". $_SESSION["favanimal"]."<br>";
            }else{
                echo "No session data found.";
            }
        ?>
    </body>
</html>