<?php 
    $cookie_name = "user";
    $cookie_value = "Kishan Jadav";

    //setcookie(name, value, expire, path, domain, secure, httponly)
    setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");     // 86400 = 1 day
    
?>


<html>
    <body>
        <?php
            if(isset($_COOKIE[$cookie_name])){
                echo "Cookie '".$cookie_name."' is set.<br>";
                echo "Value is ".$cookie_value;
            }else{
                echo "Cookie named '".$cookie_name."' is not set.";
            }
        ?>
    </body>
</html>