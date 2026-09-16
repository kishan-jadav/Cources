<!DOCTYPE html>
<html>
<body>
<h3> Returning Values </h3>
<?php
function sum($x, $y){
	$z = $x + $y;
    return $z;
}
echo "5 + 7 = ". sum(5, 10). "<br>";
echo "7 + 13 = ". sum(7, 13). "<br>";
echo "2 + 4 = ". sum(2, 4). "<br>";

?>

</body>
</html>
