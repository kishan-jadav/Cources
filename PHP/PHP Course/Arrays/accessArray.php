<!DOCTYPE html>
<html>
<body>
<h3>PHP Access Array</h3>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];

echo "<br><br>";
$age = [
	"kishan" => 21,
    "shital" => 29,
    "vishal" => 20
];
// access by key name
echo $age["shital"];

//-----------------------------------------------------------------------------

echo "<h4> Double or Single quotes </h4>";
echo $age['kishan'];		// you can use single or multi quotes.....

//-----------------------------------------------------------------------------

function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, "myFunction");	// 2nd index upar string type ma function add kryu che....

$myArr[2]();	// "()" etle ke 2nd index upar function ne execute karo...

//------------------------------------------------------------------------------

/* 
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunction");

$myArr["message"]();


//------------------------------------------------------------------------------
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";

  */
?>  




</body>
</html>
