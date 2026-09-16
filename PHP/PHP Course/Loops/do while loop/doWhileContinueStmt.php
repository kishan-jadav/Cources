<!DOCTYPE html>
<html>
<body>

<?php  
echo "<h3>do while continue statement</h3>";

$i = 0;
do{
	$i++;
	if($i==3) continue;
    echo $i;
}while($i < 10);

?>  

</body>
</html>
