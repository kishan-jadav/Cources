<?php
    // Start the session
    session_start();    
?>

<html>
    <body>
        <?php
            // Set session variable
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "session variable are set.";
        ?>
    </body>
</html>