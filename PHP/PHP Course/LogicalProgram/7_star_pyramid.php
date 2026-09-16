<?php
/*
____*       - 1
___***      - 3
__*****     - 5
_*******    - 7
*********   - 9
 */

//outerloop -> 5 rows
for ($i = 1; $i <= 5; $i++) {

    //innerloop1 -> 4 space
    for ($j = 4; $j >= $i; $j--) {
        echo " &nbsp; ";
    }

    //innerloop2 -> 1 star 
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }

    //innerloop3 -> 0 star
    for ($l = 2; $l <= $i; $l++) {
        echo "*";
    }

    echo "<br>";
}
?>
