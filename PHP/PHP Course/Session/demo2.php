<?php
    session_start();

    // access session variable
    echo $_SESSION['color'];
    
    $_SESSION['color'] = "yellow";

?>