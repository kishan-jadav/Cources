<!DOCTYPE html>
<html>
<body>

<h3>Regular Expression Modifier</h3>
<?php 
echo "Syntax:- \"/pattern/modifier\"";
// Regular Expression ek pattern che je koi moti text mathi specific information ne search and replace kare....

echo "<br><br>---------------- i modifier -------------------------------------<br>";
$txt = "Hello GM, good";
$pattern = "/g/i";		// g ne find kare, i = insensitive

echo preg_match_all($pattern, $txt);		// ketlu match thay te count kare....
echo "<br>";
echo preg_replace($pattern, "#", $txt);		// # thi replace kare....


echo "<br><br>---------------- m modifier -------------------------------------<br>";
$txt1 = "Hello GM, \nHello can you Hello?";
$pattern1 = "/^Hello/m";		// ^ = array ni starting ma j search kare, m = multiple line ma search kare

echo preg_match_all($pattern1, $txt1);
echo "<br>";
echo preg_replace($pattern1, "#", $txt1);

?>




</body>
</html>
