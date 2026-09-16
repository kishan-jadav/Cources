<!DOCTYPE html>
<html>
<body>
<pre>
<h3> Functions in Arrays </h3>
<?php  
echo "<br>-----------------array()-------------------------------------------- ";
$fruits = array("apple", "mango", "banana", "grapes", "apple");
// use for create an array, "[ ]" pn use kari shako
echo "<br><br><br>";


echo "<br>-----------------count()--------------------------------------------<br> ";
echo count($fruits);	// array item ketli che te count kare


echo "<br>-----------------array_unique()--------------------------------------------<br> ";
print_r (array_unique($fruits));	// array items mathi duplicate remove kare

echo "<br>-----------------array_reverse()--------------------------------------------<br> ";
print_r (array_reverse($fruits));


echo "<br>-----------------array_push()--------------------------------------------<br> ";
$cars = ["BMW", "Ford", "Lambo", "Thar", "Hummer H2"];
array_push($cars, "Ferrari");		// array ni last ma ek item add kare
print_r($cars);

/*
$cars = ["BMW"=> 3, "Ford"=>9, "Lambo"=>1, "Thar"=>0, "Hummer H2"=>11];
//array_push($cars, ["Scorpio"=>4]);		// nested array ho jata hai
$cars["Scorpio"]=4;
print_r($cars);
*/


echo "<br>-----------------array_pop()--------------------------------------------<br> ";
array_pop($cars);		// array ni last ma thi ek item remove kare
print_r($cars);


echo "<br>-----------------array_shift()--------------------------------------------<br> ";
array_shift($cars);		// array ni first mathi ek item remove kare
print_r ($cars);


echo "<br>-----------------array_unshift()--------------------------------------------<br> ";
array_unshift($cars, "Defender");		// array ni starting ma ek item add kare
print_r ($cars);


echo "<br>-----------------in_array()--------------------------------------------<br> ";
if(in_array("Defender",$cars)){		// array ma item che ke nahi te check kare
	echo "Yes";
}else{
	echo "No Defender";
}


echo "<br>-----------------array_key_exists()--------------------------------------------<br> ";
$age = ["kishan"=> 20, "shital"=> 29, "naresh"=>21];	

if(array_key_exists("kishan",$age)){		// array ma key available che ke nahi te check kare
	echo "Available !";
}else{
	echo "Not available !";
}


echo "<br>-----------------array_search()--------------------------------------------<br> ";
echo array_search("21", $age);			// array ma value check kari teni key return kare


echo "<br>-----------------array_merge()--------------------------------------------<br> ";
$a = ["a","b","c","d"];
$b = ["e","f","g","h"];
$c = array_merge($a, $b);
print_r($c);


echo "<br>-----------------array_slice()--------------------------------------------<br> ";
print_r (array_slice($a, 2));		//2nd item thi last sudhi print kare


echo "<br>-----------------array_chunk()--------------------------------------------<br> ";
$names = ["kishan","shital","vishal","naresh","matel","chandresh"];
print_r (array_chunk($names, 2));	// 2 - 2 na jodama items no array banavi nakhe


echo "<br>-----------------array_keys()--------------------------------------------<br> ";
print_r (array_keys($age));		// array ni badhi key alag kari ne teno array banave


echo "<br>-----------------array_values()--------------------------------------------<br> ";
print_r (array_values($age));	// array ni badhi value alag kari ne teno array banave


echo "<br>-----------------sort()--------------------------------------------<br> ";
$friend = ["kishan", "naresh", "shital", "vishal", "mehul"];
sort($friend);
print_r($friend);

echo "<br>-----------------rsort()--------------------------------------------<br> ";
rsort($friend);
print_r($friend);


echo "<br>-----------------asort()--------------------------------------------<br> ";
$vehicle = ["kishan"=>"defender", "vishal"=>"fortuner", "naresh"=>"alto"];
asort($vehicle);		// associative array ma value mujab sort kare(ascending)
print_r($vehicle);


echo "<br>-----------------ksort()--------------------------------------------<br> ";
ksort($vehicle);		// associative array ma key mujab sort kare (ascending)
print_r($vehicle);


echo "<br>-----------------array_map()--------------------------------------------<br> ";
function gunakar($num){
	return ($num*$num);
}
$a = [1,2,3,4,5,6,7,8,9,0];
$b = array_map("gunakar",$a);	// array na badha element upar function apply kari new array banave
print_r ($b);


echo "<br>-----------------array_filter()--------------------------------------------<br> ";
$marks = [12, 89, 23, 44, 90, 33, 32, 66, 23, 43, 1, 75, 0];
function result($x){	
	return $x>=33;
}
$list = array_filter($marks, "result");	// koi condition na bases par array na element ne filter kare
print_r ($list);


?>  

</pre>
</body>
</html>
