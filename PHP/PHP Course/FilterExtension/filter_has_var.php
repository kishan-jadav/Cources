<?php 
        echo "<h3>PHP filter_has_var() - checks whether a variable of a specified input type exist.</h3>";

    //Syntax:- filter_has_var(type,variable)

    // INPUT_GET
    // INPUT_POST
    // INPUT_COOKIE
    // INPUT_SERVER
    // INPUT_ENV

    if(!filter_has_var(INPUT_GET,"email")):
        echo "Email is not found";
    else:
        echo "Email is found";
    endif;
?>