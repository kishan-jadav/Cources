<!DOCTYPE html>
<html>
<body>
<h3>if...Else Statements</h3>
=================
<?php
echo "<h4>if...Else Statements</h4>";
// if...elseif...else statement execute diffrent codes for more than two conditions.

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br><br>";

echo "-----------------------------------------------------------------------------";
echo "<h4>if...Elseif..else Statement</h4>";

$age = 15;
if($age >= 18){
	echo "You can vote.";
}elseif($age < 18){
	echo "You can not vote.";
}else{
	echo "Plese enter correct age.";
}




?>
 
</body>
</html>
