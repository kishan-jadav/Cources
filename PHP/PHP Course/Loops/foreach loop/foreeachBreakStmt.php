<!DOCTYPE html>
<html>
<body>

<?php
echo "<h3>foreach break statement</h3>";

$marks = array("Kishan"=>"80", "Matel"=>"90", "Vishal"=>"99", "Shital"=>"49");

foreach($marks as $key=>$value){
	if($key == "Vishal"){
    	break;
	}
	echo "$key : $value<br>";
}
?>

</body>
</html>
