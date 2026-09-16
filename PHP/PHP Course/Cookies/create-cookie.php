<?php
   $cookie_name = 'user';
   $cookie_value = 'Yahoo BaBa';

   setcookie($cookie_name, $cookie_value, time() + (86400*30), "/");
    
?>

<html>
    <body>
            <?php
            if(!isset($_COOKIE[$cookie_name])):
                echo "Cookie '".$cookie_name ."' is not set";
            else:
                echo "Cookie '".$cookie_name."' is set.<br>";
                echo "The value of '".$_COOKIE[$cookie_name];
            endif;
            ?>
    </body>
</html>