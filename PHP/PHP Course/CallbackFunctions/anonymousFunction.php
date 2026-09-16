<?php 
    echo "<h3>Anonymous Function as a Callback</h3>";
    // anonymous function inline arguments pass kare...

    $numbers = [1,2,3,4,5];

    print_r (array_map(function($n){ return($n*$n);}, $numbers));


?>