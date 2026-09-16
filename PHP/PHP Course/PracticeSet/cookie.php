<?php 
    $cookie_name = "user";
    $cookie_value = "Kishan_Jadav";

    setrawcookie($cookie_name, $cookie_value, time()+(86400*30), "/");
?>

<html>
    <body>
        <?php
            echo "<pre>";
            print_r($_COOKIE);
            echo "</pre>";

            echo $_COOKIE[$cookie_name];
        ?>
    </body>
</html>

            <!-- if(isset($_COOKIE[$username])): -->
