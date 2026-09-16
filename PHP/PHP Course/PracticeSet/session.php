<?php 
    session_start();
?>

<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "Black";    
            $_SESSION["favanimal"] = "Wolf";

            echo "Session is Set";
        ?>
    </body>
</html>