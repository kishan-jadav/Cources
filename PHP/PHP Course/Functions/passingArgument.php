<!DOCTYPE html>
<html>
<body>
<h3> Passing Arguments by Reference</h3>
<?php
function add(&$value){
	$value+= 5;
}

$num = 2;
add($num);
echo $num;
?>

</body>
</html>
