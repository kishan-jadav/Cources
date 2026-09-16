<!DOCTYPE html>
<html>
<body>

<h3>Regular Expression Quantifiers</h3>
<?php 
echo "<br><br>---------------- + -------------------------------------<br>";
$txt = "Hello GM, Get Money, gain";
echo "<br>";
$pattern = "/e+/";		// e ketli var aave te count kare...

echo preg_match_all($pattern, $txt);
echo "<br>";
echo preg_replace($pattern, "#", $txt);



echo "<br><br>---------------- { } -------------------------------------<br>";
$txt1 = "Hello Goood, Good";
echo "<br>";
$pattern1 = "/o{3}/";	// eksathe ketli var aave te count kare....

echo preg_match_all($pattern1, $txt1);
echo "<br>";
echo preg_replace($pattern1, "#", $txt1);



echo "<br><br>---------------- { , } -------------------------------------<br>";
$txt2 = "Hello Goood, Gooooooood";
echo "<br>";
$pattern2 = "/o{2,5}/";		// check kare ke o = 5 na tukda ma ketli vaar male

echo preg_match_all($pattern2, $txt2);
echo "<br>";
echo preg_replace($pattern2, "#", $txt2);
?>




</body>
</html>
