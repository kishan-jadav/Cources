<?php

/*

******
*    *
*    *
*    *
*    *
******

*/

// outer loop 
for ($i = 1; $i <= 6; $i++) {

    for ($j = 1; $j <= 6; $j++) {
        if ($i == 1 || $i == 6 || $j == 1 || $j == 6) {
            echo "*";
        }else{
            echo "&nbsp; ";   
        }
    }
    echo "<br>";
}
