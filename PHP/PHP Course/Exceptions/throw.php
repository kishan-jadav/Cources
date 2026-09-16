<?php 
    echo "<h3>throw Keyword - This keyword use to throw exceptions </h3>";

    $n = 0;
    function divide($x, $y){
        if($y == 0){
            throw new Exception("Cannot divided by zero.");
        }
        return $x/$y;   
    }

    echo divide(5, 0);  // code that can throw an exception
    
    echo "Hello";       // exception run thyu etle code break thy gyo, tyar pachinu kai pn run na thay, etle Hello print na thayu.



?>