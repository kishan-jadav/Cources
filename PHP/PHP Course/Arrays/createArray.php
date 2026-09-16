<!DOCTYPE html>
<html>
<body>
<pre>
<h3> Create Arrays </h3>
<?php  
$cars = array("Volvo", "BMW", "Toyota");	// use array keyword or [ ]
var_dump($cars);

echo "<h4> Multiple Lines</h4>";
$vehicle = [
	"Volvo",
    "BMW",
    "Toyota"
];
var_dump($vehicle);

// A comma after the last item is allowed:

echo "<h4>Array Keys</h4>";
$age = [
	"kishan" => 21,
    "shital" => 29,
    "vishal" => 20
];
var_dump($age);

echo "<h4>Declare Empty Array</h4>";
$fruits = [];
$fruits[0]="mango";
$fruits[1]="apple";
$fruits[2]="graps";
var_dump($fruits);




?>  

</pre>
</body>
</html>
