<!DOCTYPE html>
<html>
<body>
<h3> Multidimensional Array </h3>
<pre>
<?php
$cars = array (
  array("Volvo", 22, 18),
  array("BMW", 15, 13),
  array("Saab", 5, 2),
  array("Land Rover", 17, 15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br><br><br>";


$fruits = [
	["mango", 12, 3],
    ["apple", 4, 21],
    ["strawberry", 6, 2],
    ["grapes", 9, 32]	
];

echo $fruits[0][0]. ":" .$fruits[0][1]. ":" .$fruits[0][2]."<br>";
echo $fruits[1][0]. ":" .$fruits[1][1]. ":" .$fruits[1][2]."<br>";
echo $fruits[2][0]. ":" .$fruits[2][1]. ":" .$fruits[2][2]."<br>";
echo $fruits[3][0]. ":" .$fruits[3][1]. ":" .$fruits[3][2]."<br>";
?>
</pre>
</body>
</html>
