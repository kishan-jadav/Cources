<?php 
    session_start();
?>

<html>
    <body>
        <?php 
            // session_unset();     // clear all the active session variable in your current script but keeps the session acive.
            session_destroy();      // delete the session file from the server, ending the session completely.

            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
        ?>
    </body>
</html>