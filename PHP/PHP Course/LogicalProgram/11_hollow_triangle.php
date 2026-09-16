<?php

/*

*
* *
*   *
*     *
*       *
* * * * * *


*/


$rows = 6;

// outerloop for rows
for($i = 1; $i<=$rows; $i++){

    // innerloop
    for($j = 1; $j<=$i; $j++){

        if($j==1 || $j == $i || $i == 6){
            echo "*";
        }else{
            echo "&nbsp; ";
        }
    }

    echo "<br>";
}


?>