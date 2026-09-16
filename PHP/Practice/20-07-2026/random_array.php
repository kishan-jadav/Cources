<?php
    // Create an array of five random numbers. Write a function that sorts the numbers in ascending order and returns the sorted array.

    $array = [];

    for($i=0; $i<5; $i++){
        $number = rand(0, 100);
        array_push($array, $number);
    };

    sort($array);

    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>