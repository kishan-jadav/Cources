<!DOCTYPE html>
<html>
<body>
<h3> Delete Array Items </h3>
<pre>
<?php  
echo "<br>-----------array_splice()-------------<br>";
$fruits = array("Apple", "Banana", "Cherry", "Kaju", "Badam", "Mango", "Grapes");	
array_splice($fruits, 1, 1);	// removes a portion of the array starting from a start position and length
print_r($fruits);

echo "<br>-----------unset()-------------<br>";
unset($fruits[0]);		// removes the element associated with a specific keyl
print_r($fruits);

echo "<br>-----------array_diff()-------------<br>";
$newArray = array_diff($fruits,["Mango"]);		// array mathi item select kari new array ma print kare, origional array ma koi edit karto nathi
print_r($newArray);

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);		// array_diff() function takes values as parameters, and not keys.
print_r($newarray);

echo "<br>-----------array_pop()-------------<br>";
$name = array("kishan", "shital", "naresh", "vishal", "gopal");	//remove last item of the array
array_pop($name);
print_r($name);

echo "<br>-----------array_shift()-------------<br>";
$name1 = ["mahesh", "mehul", "rajesh", "Meena"];		// remove first item of the array
array_shift($name1);
print_r($name1);
?>
</pre>

</body>
</html>
