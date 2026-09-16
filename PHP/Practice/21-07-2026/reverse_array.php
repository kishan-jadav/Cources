<?php
// Given an array of strings, write a function that returns a new array with the strings in reverse order.

$arr = ["Kishan", "Vishal", "Mehul", "Naresh"];

function newArr(array $arr){
    return array_reverse($arr);
}

$arr = newArr($arr);

print_r ($arr);
// echo $arr2;

// $x = rsort($arr);
// $arr = sort($arr);

// array_reverse($arr);

?>