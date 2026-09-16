<!DOCTYPE html>
<html>
<body>
<h2>Php Operators</h2>
==================
<?php
/*
1. Arithmetic operators
2. Assignment operators
3. comparison operators
4. Incriment/Decrement operators
5. Logical operators
6. String operators
7. array operators
8. conditional operators

*/
$x = 10;  
$y = 6;

echo "<h3>Arithmetic Operators</h3>";
echo "Addition = " .$x + $y. "<br>";
echo "Substraction  = " .$x - $y. "<br>";
echo "Multiplication  = " . $x * $y. "<br>";
echo "Division = " .$x/$y. "<br>";
echo "Modulus = " .$x % $y. "<br>";
echo "Power = " . $x ** $y. "<br><br>";	// ghaataank 



echo "-----------------------------------------------------------------------------";
echo "<h3>Assignment Operators</h3>";
$i = 10;
echo $i ."<br>";

$x += 10;
echo $x. "<br>";

$x -= 10;
echo $x. "<br>";

$x *= 10;
echo $x. "<br>";

$x /= 10;
echo $x. "<br>";

$x %= 10;
echo $x. "<br><br>";



echo "-----------------------------------------------------------------------------";
echo "<h3>Comparison Operators</h3>";
var_dump ($x == $y);
echo "<br>";
var_dump ($x === $y);
echo "<br>";
var_dump ($x != $y);
echo "<br>";
var_dump ($x <> $y);	// "!=" comparison operator nu biju roop
echo "<br>";
var_dump ($x !== $y);
echo "<br>";
var_dump ($x > $y);
echo "<br>";
var_dump ($x < $y);
echo "<br>";
var_dump ($x >= $y);
echo "<br>";
var_dump ($x <= $y);
echo "<br><br>";



echo "-----------------------------------------------------------------------------";
echo "<h3>Increment/Decrement Operators</h3>";
echo ++$x."<br>";	// pre increment
echo $x++. "<br>";	// post increment
echo --$x. "<br>";	// pre decrement
echo $x--. "<br><br>";	// post decrement



echo "-----------------------------------------------------------------------------";
echo "<h3>Logical Operators</h3>";
$j = 10;
$k = 20;
if ($j==10 and $k==20){	// &&
	echo "And <br>";	// banne true hova joie
}

if ($j==1 or $k==20){		// ||
	echo "Or <br>";		// koi ek true hovu joie
}

$o = 3;
$p = 5;
if ($o==3 xor $p==2){	// !
	echo "Xor <br><br>";	// koi ek true hovu joie pn banne true na hova joie
}



echo "-----------------------------------------------------------------------------";
echo "<h3>String Operator</h3>";
$str1 = "Hello";
$str2 = "World";
 
echo $str1 . $str2 ."<br>";	// "." concatination
$str1 .= $str2;		// ".=" concatination and store value in $str1
echo $str1;
echo "<br><br>";
 
 
 
echo "-----------------------------------------------------------------------------";
echo "<h3>Array Operator</h3>";
$arr1 = ["a"=>"red", "b"=>"green"];
$arr2 = ["c"=>"blue", "d"=>"yellow"];

print_r ($arr1 + $arr2);	// banne string ne connect kare
echo "<br>";
var_dump($arr1 == $arr2);	// compare kare
echo "<br>";
var_dump($arr1 === $arr2);	// compare with data type
echo "<br>";
var_dump($arr1 != $arr2);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);
echo "<br><br>";



echo "-----------------------------------------------------------------------------";
echo "<h3>Conditional Operator</h3>";
$marks = 60;
$result = ($marks >= 40) ? "Pass" : "Fail";	// Condition ? True : False;
echo $result;


?>  

</body>
</html>
