<!DOCTYPE html>
<html>
<body>

<?php  
echo "<h3>do while break statement</h3>";

$i = 1;
do{
	if($i == 3) break;
    echo $i;
    $i++;
}while($i<10);

?>  

</body>
</html>
