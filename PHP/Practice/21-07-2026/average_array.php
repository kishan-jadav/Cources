<?php
// Write a function that takes an array of numbers as input and returns the median value. If the array has an even number of elements, return the average of the two middle values

function getMedian($numbers)
{
    $count = count($numbers);   //5

    if ($count === 0) {
        return null; // return null for empty array
    }

    sort($numbers);  // 1, 3, 6, 7, 9
    $mid = floor($count / 2); // 5/2 = 2.5 => 2

    if ($count % 2 === 0) {
        return ($numbers[$mid - 1] + $numbers[$mid]) / 2; // (3 + 6)/2 = 4.5
    } else {
        return $numbers[$mid]; // 6
    }
}

$array1 = [1, 3, 6, 7, 9, 12, 4, 22, 10];
echo getMedian($array1) . "<br>"; // Output: 6

$array2 = [2, 44, 80, 10, 30, 12, 8, 34, 24];
echo getMedian($array2) . "<br>"; // Output: 30
