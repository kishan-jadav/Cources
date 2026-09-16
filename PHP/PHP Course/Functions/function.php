<!DOCTYPE html>
<html>
<body>
<h2>PHP Functions </h2>
<?php
// Function: etle reusable code
// function is a block of statement that can be used repeatedly in a program...
// a function is exicuted only when it is called...


//user defined function declaration starts with the key word function...
// function name starts with letter of underscore, not case sensitive...

function hello(){		// create a function
	echo "Hello World";
}

Hello();	// call that function, not case sensitive

echo "<h3>PHP Parameters</h3>";
function family($name){
	echo "$name Jadav <br>";
}
family("Kishan");
family("Gopal");
family("Shital");

echo "<h3>Two parameters value</h3>";
function salary($name, $salary){
	echo "$name salary is $salary <br>";
}
salary("Kishan", 15000);
salary("Vishal", 25000);
salary("Shital", 7500);

?> 

</body>
</html>
