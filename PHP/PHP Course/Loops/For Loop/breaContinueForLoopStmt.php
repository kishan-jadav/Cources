<!DOCTYPE html>
<html>
<body>

<?php  
echo "<h3>break statement</h3>";
for($i=1; $i<10; $i++){
	if($i==3)break;
	echo "$i<br>";
}

echo "<h3>continue statement</h3>";
for($i=1; $i<=10; $i++){
	if($i==3)continue;
    echo "$i<br>";
}


?>  

</body>
</html>
