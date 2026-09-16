<!DOCTYPE html>
<html>
<body>

<?php
// left to right check kare jo number hoy to tene int ma convert karshe

$text = "15.5 kilo apples";	// left ma numbe che.....
$quantity = (int)$text;		// true

echo $quantity * 2;
echo "<br>";

//-----------------------------------------------------------

$text1 = "apples 15.5 kilo";	// left ma number nathi......
$quantity = (int)$text1;		// false

echo $quantity * 2;

?>

</body>
</html>
