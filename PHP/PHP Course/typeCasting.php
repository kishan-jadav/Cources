<!DOCTYPE html>
<html>
<body>
<h3> Type Casting <h3>  // Convert one data type to another data type.....

<?php

echo "<h4>Int to Float </h4>";  
$a = 10;
$b = (float)$a;     // Convert an integer to a float.
var_dump($b);

echo "<h4>Float to String</h4>";
$c = (string)$b;    // Convert a float to a string.
var_dump($c);

echo "<h4>String to Array </h4>";
$d = (array)$c;     // Convert a string to an array
var_dump($d);

echo "<h4>Array to Objet</h4>";
$e = (object)$d;    // convert to an array to an object
var_dump($e);

echo "<h4>Int to Null</h4>";
$a = null;      // convert an integer to null
var_dump($a);
?>	

</body>
</html>
