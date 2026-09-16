<?php
// Create an array of strings representing the names of countries. Write a function that sorts the array in alphabetical order and returns the sorted array.


function sortArray($result){
    sort($result);
    return $result;
}
    
$country = ["India", "Pakistan", "Dubai", "Rusia", "Canada"];
$result = sortArray($country);

print_r($result);

?>