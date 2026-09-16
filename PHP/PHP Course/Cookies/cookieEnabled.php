<?php 
    $cookiename = "user";
    $cookievalue = "vishal";

    setcookie($cookiename, $cookievalue, time()+(3600),"/");
?>

<html>
    <body>
        <?php
            if(count($_COOKIE) > 0){
                echo "Cookie was enabled.";
            }else{
                echo "Cookie was disabled.";
            }
        ?>
    </body>
</html>