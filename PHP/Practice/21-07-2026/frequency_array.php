<?php
// Given an array of strings, write a function that counts and displays the frequency of each unique string in the array.

$fruits = ["apple", "banana", "apple", "orange", "banana", "apple"];

$counts = array_count_values($fruits);
// $counts = count($fruits);

foreach($counts as $fruits => $frequency){
    echo "$fruits : $frequency <br>";
}


// print_r($counts);


?>