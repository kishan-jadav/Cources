<!DOCTYPE html>
<html>
<body>
<pre>
<h3> Update Array Items </h3>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);

echo "<h4>Associative Array</h4>";
$age = ['kishan'=> 21, 'shital'=>29, 'naresh'=>21];

$age["shital"]=20;
var_dump($age);

echo "<h4>Update Array items in a Foreach Loop</h4>";
foreach($cars as &$a){		// & use karvathi $cars = $x thay....
	$a = "Defender";
}
unset($x);	//$x nu $car sathenu connection cut kari nakhe che...
var_dump($cars);


?>  

</pre>
</body>
</html>
