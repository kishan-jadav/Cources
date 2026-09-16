<!DOCTYPE html>
<html>
<body>
<h3>Variable Number of Parameters </h3>
<?php
echo "<h4>Variadic Function</h4>";
// Variadic Function (...$x) ka use tab kiya jata hai jab aapko pehle se pata na ho ki function me total kitne arguments (inputs) aane wale hain, aur aap chahte ho ki aapka function kitne bhi numbers ya data ko akele sambhal le.

//The variadic function argument becomes an array.

function sumMyNumbers(...$x){	// bahar thi aavta badha number no array banavi leshe..
	$n = 0;
    $len = count($x);	// total number ketla che 
	for($i = 0; $i<$len; $i++){
    	$n += $x[$i];
    }
    
    return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;


?>



</body>
</html>
