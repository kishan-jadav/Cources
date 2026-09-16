<!DOCTYPE html>
<html>
<body>

<?php  
echo "<h3>Break & Continue Statement<h3>";
echo "========================";

echo "<h4>Break Statement</h4>";
$i = 1;
while($i<10){
	if ($i == 3) break; 	// 3 aave etle loop stop thy jaay
    echo $i;
    $i++;
}

echo "<h4> Continume Statement</h4>";
$i = 0;
while($i < 10){
	$i++;
	if ($i == 3) continue;	// 4 thi continue kare
	echo "$i";

}

?>  

</body>
</html>
