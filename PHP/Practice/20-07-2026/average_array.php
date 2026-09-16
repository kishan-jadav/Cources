<?php
    /*
    Given an associative array of student names and their corresponding grades, 
    write a function that calculates and displays the average grade for the students.
    */
    
    // create associative array of students grades
    $students = ["Kishan"=>87, "Vishal"=>98, "Mehul"=>50];

    // create function that calculates and displays the average grade for the students
    function averageGrade(array $students){
        array_values($students);
        return array_sum($students)/2;
    }

    $average = averageGrade($students);
    echo "The average grade of the students is: " .round($average);     // return in integer value 

    // print_r(averageGrade($students));

?>