<?php
/*
  1
 121
12321
*/


// outer loop for -> row
for ($i = 1; $i <= 5; $i++) {

    // innter loop 1 for -> space
    for ($j = 4; $j >= $i; $j--) {
        echo "&nbsp;&nbsp;";
    }

    // inner loop 2 for ->left side number
    for ($k = 1; $k <= $i; $k++) {
        echo $k;
    }

    // inner loop 3 for ->right side number
    for ($l = $i - 1; $l >= 1; $l--) {
        echo $l;
    }
    echo "<br>";

}

?>