<!DOCTYPE html>
<html>
<body>
<h3> Php If Operator </h3>
================
<?php

echo "<h4>Php If comparison operators</h4>";
$x = 10;
$y = 10;

if ($x == $y){
	echo "$x is equal to $y";
}
echo "<br><br>";

if($x === $y){
	echo "$x is equal to $y";
}
echo "<br><br>";

$a = 100;
$b = 50;
if ($a != $b){
	echo "$a is not equal to $b";
}
echo "<br><br>";

if($a <> $b){
	echo "$a is not equal to $b";
}
echo "<br><br>";

if($a !== $b){
	echo "$a is not equal to $b";
}
echo "<br><br>";

if($a > $b){
	echo "$a is greater than $b";
}
echo "<br><br>";

if($b < $a){
	echo "$b is less than $a";
}
echo "<br><br>";

if($a >= $b){
	echo "$a is greater than or equal to $b";
}
echo "<br><br>";

if($b <= $a){
	echo "$b is less than or equal to $a";
}

echo "<br><br><br>-----------------------------------------------------------------------------";
echo "<h4>Php If logical operators</h4>";
$p = 5;
$q = 10;
$r = 15;
if($p < $q && $q < $r){		// "and" use kari shako
	echo "Both condition are true";	// both condition true hovi joie
}
echo "<br><br>";

if($p < $q || $q > $r){		// "or" use kari shako
	echo "True only one condition";	// only one condition true hovi joie
}
echo "<br><br>";

if($p < $q xor $q > $r){	// "!" use kari shako
	echo "Welcome!";		// banne true na hovi joie
}
?>
 
</body>
</html>
