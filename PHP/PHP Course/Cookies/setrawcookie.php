<?php
    $cookie_name = "user";
    $cookie_value = "Kishan_Jadav"; // Kishan Jadav ni vachche space muko to browser ma error show thashe, because setrawcookie function value ne encode nathi karto.

    //setrawcookie value ne URL-encode nathi karto
    setrawcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>
    <body>
        <?php
            if(isset($_COOKIE[$cookie_name])){
                echo "Cookie '".$cookie_name."' is set!<br>";
            }
        ?>
    </body>
</html>