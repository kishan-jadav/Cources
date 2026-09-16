<?php

    $cookie_name = "user";

    if(count($_COOKIE) > 0):
        echo "Cookies are enabled.";
        if(isset($_COOKIE[$cookie_name])):
            echo "Cookie is '" .$_COOKIE[$cookie_name]. "' set!";
        endif;
    else:
        echo "Cookies are disabled.";
    endif;




?>