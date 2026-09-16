<!DOCTYPE html>
<html>
<body>
<pre>
<h3> Indexed Arrays </h3>
<?php

// darek item ne index number hoy che.
// first index item ne 0 index number hoy che.
echo "<h4> Indexed Array</h4>";
$cars = array("Volvo", "BMW", "Toyota"); 
var_dump($cars);

echo "<h4> Access Array Item </h4>";
echo $cars[1];

echo "<h4> Change value of Array Item </h4>";
echo $cars[1] = "Hummer H2";
var_dump($cars);

echo "<h4> Loop through an indexed Array</h4>";
foreach($cars as $c){
	echo "$c<br>";
}

?>

</pre>
</body>
</html>
