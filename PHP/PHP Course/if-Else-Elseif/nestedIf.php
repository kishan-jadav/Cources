<!DOCTYPE html>
<html>
<body>
<h3>Nested If</h3>
=========
<?php

echo "<br><br>";


$a = 105;

if ($a > 100){
	echo "a above 100";
    if($a > 200){
    	echo "and also above 200";
    }else{
    	echo "but not above 200";
    }
}
?>

</body>
</html>
