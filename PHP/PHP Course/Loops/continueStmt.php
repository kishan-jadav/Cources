<!DOCTYPE html>
<html>
<body>
<h2> Continue Statement </h2>
======================
<?php  
echo "<h3>For Loop Continue Statement</h3>";
for ($a = 0; $a < 10; $a++) {
  if ($a == 4) {
    continue;
  }
  echo " $a <br>";
}

echo "<h3>While Loop Continue Statement</h3>";
$b = 0;

while($b < 10){
    $b++;
	if($b == 4){
    	continue;
    }
    echo "$b <br>";
}

echo "<h3>do while loop continue statement</h3>";
$c = 0;
do{
    $c++;
	if($c == 4){
    	continue;
    }
    echo "$c <br>";
}while($c < 10);


echo "<h3>foreach loop continue statement</h3>";
$d = ["kishan", "shital", "vishal", "naresh", "matel"];

foreach($d as $name){
	if($name == "vishal"){
    	continue;
    }
	echo "$name<br>";
}

?>



</body>
</html>

