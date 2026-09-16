<?php 
    session_start();
?>

<html>
    <body>
        <?php 
            echo "<pre>";
            print_r($_SESSION);     // Access and show all session variable
            echo "</pre>";
        ?>
    </body>
</html>