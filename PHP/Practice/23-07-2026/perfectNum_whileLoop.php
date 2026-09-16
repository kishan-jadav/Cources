<?php
// Check if a given number is a perfect number using a while loop.

// 6 = 1, 2, 3
// 28 = 1, 2, 3, 4, 7, 14
// 496 = 1, 2, 4, 8, 16, 31, 62, 124, 248, 
// 8128


$number = 28;

$sum = 0;
$i = 1;

while($i < $number){
    if($number % $i == 0){
        $sum = $sum + $i;
    }
    $i++;
}

if($sum == $number && $number > 0){
    echo "$number is a perfect number.";
}else{
    echo "$number is not a perfect number.";
}


?>