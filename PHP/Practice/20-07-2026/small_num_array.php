<?php
// Create an array of ten random numbers. Write a function that finds and displays the second smallest number in the array

    $array = [];

    for($i=0; $i<10; $i++){
        array_push($array, rand(0, 100));
    }

    $min = min($array);

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    // echo "Smallest value in array is: $min";
    function smallestValue($array){
        $array = array_unique($array);
        $remove = min($array);

        $key = array_search($remove, $array);
        // echo "<br> Key = ". $key;
        unset($array[$key]);

        $array = array_values($array);
        return min($array);
    }

    $min = smallestValue($array);
    echo "<br>Second smallest value in array is: $min";
    
?>