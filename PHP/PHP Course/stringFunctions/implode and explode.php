<!DOCTYPE html>
<html>
<body>
<h3> String Functions <h3>

<?php
$x = "This is a string!";

echo "<h4>explode string function</h4>";

$y = explode(" ",$x);   // use to split a string into an array by using a delimiter (in this case, a space).
print_r($y);

echo "<br><br>";


echo "<h4>implode string function</h4>";

$arr = array("Kishan","Shital","Vishal","Naresh");
echo implode("-",$arr);     // use to join array elements into a string with a specified separator (in this case, a hyphen).

?>

</body>
</html>
