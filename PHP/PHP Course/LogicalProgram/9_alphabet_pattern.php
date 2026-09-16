<?php
/*
A
BB
CCC
DDDD
EEEEE
*/

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $i);
    }

    echo "<br>";
}
