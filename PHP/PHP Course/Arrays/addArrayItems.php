<!DOCTYPE html>
<html>
<body>
<h3> Add Array Items </h3>
<pre>
<?php  
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");		// add one or more items to the end of array
print_r($fruits);


echo "<h4>Indexed Array</h4>";

$name = ["kishan"=> "shital", "naresh"=>"daya", "vishal"=>"puja"];
$name["shitu"] = "jadav";
print_r($name);

?>
</pre>

</body>
</html>
