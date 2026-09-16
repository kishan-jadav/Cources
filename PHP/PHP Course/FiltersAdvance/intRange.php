<?php
echo "<h3>Validate an integer within a range </h3> ";   

// variable check
$int = 122;

// min value
$min = 1;
// max value
$max = 200;

//Syntax: filter_var(variable, filter, option)
if(filter_var($int,FILTER_VALIDATE_INT, array(
                                        "options" => array(
                                                    "min_range" => $min, 
                                                    "max_range" => $max))) === false):
    echo "Variable value is not within the legal range";
else:
    echo "Variable value is within the legal range";
endif;
    
?>