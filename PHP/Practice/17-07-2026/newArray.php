<?php
    // Given an array of strings, write a function that returns a new array containing only the strings that have more than five characters.

    $name = ["Kishan", "Yash", "Deep", "Naresh"];
    $newArray =[];
    
    echo "More than 5 characters: <br><br>";

    foreach ($name as $value){
        // echo "Value is: $value <br>";
        if(strlen($value) > 5):
            $newArray[] = $value;
        endif;
        // var_dump($value);
    }
    
    print_r($newArray);


    // $kishan= strlen($name[0]);
    

    // $yash = "$name[1]";
    // echo strlen($first);
    // if(strlen($kishan)>5):
        //     array_push($newArray, "Kishan");
        // endif;
    // array_push($newArray,"Raj");

    // echo sizeof($name);
    // print_r(array_count_values($name));



?>