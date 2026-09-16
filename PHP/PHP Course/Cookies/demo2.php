<?php

$cookie_name = "user";
$cookie_value = "Kishan Jadav";

setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");

if(isset($_COOKIE[$cookie_name])):
    echo "Cookie '" .$cookie_name. "' is set! <br>  ";
    echo "Value is '" .$_COOKIE[$cookie_name];
else:
    echo "Cookie '" .$cookie_name. "' is not set!!";
endif;

?>