<?php
    //  Write a function that takes two arrays as input and returns a new array that contains the unique elements from both arrays.

    // create two arrays
    $array1 = [1, 10, 5, 18, 0, 10, 0, 5, 5, 5, 5, 5];
    $array2 = [2, 19, 33, 18, 5, 10, 33, 9, 1, 3, 22];

    // create a function that takes two arrays as input
    function uniqueArray(array $array1,array $array2){
        return array_unique(array_merge($array1, $array2));     // return a new array that contains the unique elemets from both arrays
    }

    $newArray = uniqueArray($array1, $array2);      // assign in $newArray

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";


?>