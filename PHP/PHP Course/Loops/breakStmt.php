<!DOCTYPE html>
<html>
<body>
<h2> Break Statement </h2>
======================
<?php  
echo "<h3>For Loop Break Statement</h3>";
for ($a = 0; $a < 10; $a++) {
  if ($a == 4) {
    break;
  }
  echo " $a <br>";
}

echo "<h3>While Loop Break Statement</h3>";
$b = 0;

while($b < 10){
	if($b == 4){
    	break;
    }
    echo "$b <br>";
    $b++;
}

echo "<h3>do while loop break statement</h3>";
$c = 0;
do{
	if($c == 4){
    	break;
    }
    echo "$c <br>";
    $c++;
}while($c < 10);


echo "<h3>foreach loop break statement</h3>";
$d = ["kishan", "shital", "vishal", "naresh", "matel"];

foreach($d as $name){
	if($name == "vishal"){
    	break;
    }
	echo "$name<br>";
}

?>



</body>
</html>

