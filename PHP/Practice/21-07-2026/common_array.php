<?php
// Given two arrays of numbers, write a function that returns a new array containing only the common elements between the two arrays.

$number1 = [1, 22, 4, 1, 9, 21, 5];
$number2 = [3, 9, 23, 2, 5, 21, 11];

function commonValue($number1, $number2)
{
    return array_intersect($number1, $number2);
}

$array = commonValue($number1, $number2);

print_r($array);
// echo $array;
