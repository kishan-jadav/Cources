<?php 
    $cookie_name = "username";
    $cookie_value = "Kishan Jadav";
    setcookie($cookie_name, $cookie_value, time()+(86400), "/");

?>

<html>
    <body>
        <?php
            if(isset($_COOKIE[$cookie_name])):
                echo "Cookie '".$cookie_name."' is set";
            else:
                echo "Cookie '".$cookie_name."' is not set";
            endif;
        ?>
    </body>
</html>