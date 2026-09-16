<?php
// Print a diamond pattern of asterisks using nested for loops.

/*
    * 1
   *** 3
  ***** 5
 ******* 7
********* 9
 ******* 7 
  ***** 5
   *** 3
    * 1

*/
$a = 5; // total lines

echo "<pre>";

for ($i = 1; $i <= $a; $i++) {
    for ($x = 1; $x <= ($a - $i); $x++) {    // space
        echo " ";
    }

    for ($y = 1; $y <= (2 * $i - 1); $y++) {    // *
        echo "*";
    }

    echo "<br>";
}

for ($i = $a; $i >= 1; $i--) {
    for ($j = 1; $j <= ($a - $i); $j++) {     // space
        echo " ";
    }

    for ($k = 1; $k <= (2 * $i - 1); $k++) {      // *
        echo "*";
    }
    echo "\n";
}

echo "</pre>";

?>