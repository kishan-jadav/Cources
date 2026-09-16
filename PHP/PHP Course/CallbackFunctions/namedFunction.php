<?php 
echo "<h3>Named Function as a Callback</h3>";
// named function, functin nu name string tarike paas kare...

function myFunction($n){
    return($n * $n);
}

// Array of numbers to multiply
$number = [1,2,3,4,5];

//Syntax: array_map("function", arr1, arr2, ...)
print_r(array_map("myFunction",$number));
?>