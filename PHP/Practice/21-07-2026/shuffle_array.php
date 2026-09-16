<?php
// Create an array with the names of five cities. Write a function that shuffles the elements of the array randomly and returns the shuffled array.

$cities = ["Jasdan", "Rajkot", "Babra", "Amreli", "Sukhpur"];

function shuffleArray(array $cities){
    shuffle($cities);
    return $cities;
}

$cities = shuffleArray($cities);
echo "Shuffled Cities: ";
print_r($cities);

// shuffle($cities);
// print_r($cities);
?>