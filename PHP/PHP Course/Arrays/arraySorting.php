<!DOCTYPE html>
<html>
<body>
<h3> Array Sorting </h3>
<pre>
<?php  
echo "<br>-----------sort()-------------<br>";
$cars = ["BMW", "Ferrari", "Lambo", "Ford", "Hummer", "G-Wagon"];
sort($cars);		// Accending order ma sort kare....
print_r ($cars);

echo "<br>-----------rsort()-------------<br>";
rsort($cars);
print_r ($cars);

echo "<br>-----------asort()-------------<br>";
$name = ["kishan"=>"jadav", "shital"=>"shiroliya", "vishal"=>"makwana"];
asort($name);		// sorting array according to value(accending)
print_r ($name);

echo "<br>-----------ksort()-------------<br>";
ksort($name);		// sorting array according to key(accending)
print_r($name);

echo "<br>-----------arsort()-------------<br>";
arsort($name);		// sorting array according to value(decending)
print_r($name);

echo "<br>-----------ksort()-------------<br>";
krsort($name);		// sorting array according to key(decending)
print_r($name);





?>
</pre>

</body>
</html>
