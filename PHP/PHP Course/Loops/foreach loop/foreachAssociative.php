<!DOCTYPE html>
<html>
<body>

<?php  
echo "<h4>foreach of associative arrays</h4>";

$marks = array("Kishan"=>"89", "Vishal"=>"99", "Shital"=>"50");

foreach($marks as $key => $value){
	echo "$key : $value <br>";
}
?>  

</body>
</html>
