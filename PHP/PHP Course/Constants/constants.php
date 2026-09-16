<!DOCTYPE html>
<html>
<body>
<h2>PHP Constants</h2>
==================
<?php

// Constants variable jeva hoy che, ekvar define thay jay pachi tema changes thato nathi.....
// const or define() vade constant ne define karvama aave chhe..
// letter of underscore thi start thay che..($ sign use nathi thato)

//============================================================================================

echo "<h4>define() Function</h4>";	// define() functions defines a constant runtime
// define() function always define in the global scope, if-else, loops, functions..(class ni bahar pura project ma bane)

define("a","Hello GM");
echo a;

echo "<br><br>";
function myTest() {
	define("b","How are you ?");
}

myTest();
echo b;
echo "<br><br>";

echo "-----------------------------------------------------------------------------";
echo "<h4>const Keyword</h4>";	// const keyword defines a constant compile time
// can be used to define class constants, only class ni andar j use thay 
const x = "Thanks!";
echo x;
echo "<br><br>";

echo "-----------------------------------------------------------------------------";
echo "<h4>Array constants</h4>";	// use define() and const keyword
echo "<h5>Using define() funtion</h5>";
define("CARS", array("Ferrari","Mclaren","BMW"));
echo CARS[0];
echo "<br><br>";

const ANIMALS = array("Lion", "Tiger", "Wolf");
echo ANIMALS[0];


?>

</body>
</html>
