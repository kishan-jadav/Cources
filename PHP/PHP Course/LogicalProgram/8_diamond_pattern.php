<?php
/*
____*
___***
__*****
_*******
*********
_*******
__*****
___***
____*

*/



// F1(Outer1) -> Upper Triangle
for($i=1; $i<=5; $i++){

    // I1(Inner1) = space = 4 
    for($j=4; $j>=$i; $j--){
        echo "_";
    }
    
    // I2(Inner2) = star = 1
    for($k=1; $k<=$i*2-1; $k++){
        echo "*";
    }

    echo "<br>";
}

// F2(Outer2) -> Lower Triangle
for($a=4; $a>=1; $a--){

    // I4(Inner4) = space = 1
    for($x=4; $x>=$a; $x--){
        echo "_";
    }

    // I5(Inner5) = star = 7
    for($y=1; $y<=$a*2-1; $y++){
        echo "*";
    }

    echo "<br>";
}



?>