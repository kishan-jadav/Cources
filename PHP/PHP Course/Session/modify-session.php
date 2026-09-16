<?php 
    session_start();
?>

<html>
    <body>
        <?php 
            $_SESSION["favcolor"] = "black";        // Overwrite kari nakhvathi variable ni new value set thy jaay

            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
        ?>
    </body>
</html>