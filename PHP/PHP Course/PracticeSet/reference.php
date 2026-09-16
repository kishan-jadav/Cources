<!DOCTYPE html>
<html>
<body>

<?php

$a = "10 apples";
$b = &$a; // & = reference ($b ne $a thi referece kari didho, $a ma change thay to $b ma pn thay)
$b = "20 oranges";	// $b = 20 means $a ma pn 20 

$a += 5;	// $a + 5 = 20+5 = 25aa

echo $b;

?>

</body>
</html>
    