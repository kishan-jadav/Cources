<?php
    $cookie_name = "username";
    $cookie_value = "Vishal";   
    setcookie($cookie_name, $cookie_value, time()+(3600), "/"); 
    // cookie modify karva just again set cookie using setcookie() function
?>

<html>
    <body>
        <?php
            if(isset($_COOKIE[$cookie_name])){
                echo "Cookie is set.<br>";
            }else{
                echo "Cookie is not set";
            }
        ?>
    </body>
</html>