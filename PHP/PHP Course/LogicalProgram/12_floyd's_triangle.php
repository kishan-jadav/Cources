<?php

/*

1
23
456
78910

*/
$rows = 4;
$num = 1;

for ($i = 1; $i <= $rows; $i++) {
    for($j = 1; $j <= $i; $j++){
        echo $num . "&nbsp;";
        $num++;
    }

    echo "<br>";
}
