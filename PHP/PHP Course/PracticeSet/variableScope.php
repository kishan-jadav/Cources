<!DOCTYPE html>
<html>
<body>

<?php

$num = 10;	//global variable

function multiply() {
    $num = 5;			// local variable
    $num = $num * 3;	// 5 x 3 = 15, but this is local variable	
}

multiply();
echo $num;	// output = 10, print global variable

?>

</body>
</html>
