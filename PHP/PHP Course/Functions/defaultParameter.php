<!DOCTYPE html>
<html>
<body>
<h3>Default Parameter Value</h3>
<?php

function myHeight($height=50){
	echo "The height is: $height <br>";
}
myHeight(350);
myHeight();

?>

</body>
</html>
