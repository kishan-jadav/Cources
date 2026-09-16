<?php 

    echo "Welcome to the world of cookies.<br>";

    time();
    setcookie("category","Books",time()+(86400),"/");
    echo "The Cookie is set";
?>