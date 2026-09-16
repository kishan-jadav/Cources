<?php
/*

1
11
121
1331
14641

*/

// create factorial function
function factorial($n){
    $fact = 1;
    for($x = 1; $x<=$n; $x++){
        $fact = $fact * $x;
    }

    return $fact;
}

// create nCr function
function nCr($n, $r){
    return factorial($n)/ (factorial($r) * factorial($n - $r));
}

$rows = 4;
for($i = 0; $i<=$rows; $i++){
    for($j = 0; $j<=$i; $j++){
        echo nCr($i, $j);
    }
    echo "<br>";
}



?>