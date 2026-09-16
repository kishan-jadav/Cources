<?php 
    session_start();
?>

<html>
    <body>
        <?php 
            echo "My favorite color is ".$_SESSION["favcolor"];
        ?>
    </body>
</html>