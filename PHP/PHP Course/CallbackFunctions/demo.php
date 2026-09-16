<?php

    function double($x){
        return $x * $x;
    }

    $arr = [1, 2, 3, 4, 5];

    $result = array_map("double", $arr);

    print_r($result);


?>