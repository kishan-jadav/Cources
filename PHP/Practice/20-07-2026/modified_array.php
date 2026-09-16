<?php
    // Given an array of numbers, write a function that removes any duplicate numbers and returns the modified array.

    $number = [1, 4, 22, 0, 22, 4, 1];

    $modified = array_unique($number);
    
    print_r($modified);
?>