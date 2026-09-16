<!DOCTYPE html>
<html>
<body>
<h3> PHP Math Function <h3>

<?php

echo "<h4>Pi Function</h4>";
echo pi();

echo "<h4>Min - Max Function</h4>";
$a = [12, 36, 9 ,1 , 23];
echo min($a);       // find minimum value in an array
echo "<br>";
echo max($a);       // find maximum value in an array

echo "<h4>abs() Function</h4>";
echo abs(-12.3);	// absolute (negative) value convert into Positive value....	

echo "<h4>sqrt() Function</h4>";
$b = 81;
echo sqrt(25)."<br>";	// square root kadhva mate....
echo sqrt($b);

echo "<h4>round() Function</h4>";
echo round(2.65)."<br>";	// use to round off the decimal value to nearest intege value
echo round(0.49);

echo "<h4> rand() Function</h4>";
echo rand(10, 100);		// use to generate random number between given range

?>	

</body>
</html>
