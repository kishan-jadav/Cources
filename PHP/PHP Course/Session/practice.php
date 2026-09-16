<?php
    $cookie_name = "username";
    $cookie_value = "Kishan Jadv";
?>

<html>
    <body>
        <?php 
            //setcookie(user, value, expired, path, domain, httplogin)
            setcookie($cookie_name, $cookie_value, time()+(3600),"/");

            if(isset($_COOKIE[$cookie_name])):
                echo "Cookie '".$cookie_name."' is set.";
            else:
                echo "Cookie is not set.";
            endif;
        ?>
    </body>
</html>