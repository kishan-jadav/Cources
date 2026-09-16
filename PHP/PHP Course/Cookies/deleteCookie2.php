<?php

    $cookie_name = "user";
    $cookie_value = "Kishan Jadav";
    setcookie($cookie_name, $cookie_value, time()-(86400*30));

    if(count($_COOKIE) > 0):
        echo "Cookie are enabled";
    endif;


?>