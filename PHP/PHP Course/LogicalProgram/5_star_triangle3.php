<?php

/*
  1
 12
123

*/

for ($i = 1; $i <= 3; $i++) {
    for ($j = 2; $j >= $i; $j--) {
        echo "&nbsp;&nbsp;";
    }

    for ($k = 1; $k <= $i; $k++) {
        echo $k;
    }
    echo "<br>";
}

?>