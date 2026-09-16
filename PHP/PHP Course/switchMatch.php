<!DOCTYPE html>
<html>
<body>

<h3>Switch Case Statement</h3>
<?php

// Conditional statement che je ek expression ne multiple value(cases) sathe compare kare....

$day = "Friday";

switch($day){
	case "Sunday":
    	echo "Today is Sunday";
    	break;
	case "Monday":
    	echo "Today is Monday";
        break;
	case "Tuesday":
    	echo "Today is Tuesday";
        break;
	case "Wednesday":
    	echo "Today is Wednesday";
        break;
	case "Thursday":
    	echo "Today is Thursday";
        break;
	case "Friday":
    	echo "Today is Friday";
        break;
	case "Saturday":
    	echo "Today is Saturday";
        break;
	default:	//ekey condition match no thay tyare run thay..
    	echo "Please enter correct day....";
}
echo "<br><br>";

echo "-------------------------------------------------------------------------------";
echo "<h3>Match Expression</h3>";
// The match expression is new in PHP 8.0.
// switch case nu modern version che..

$car = "Lambo";
$vehicle = match($car){
	"Ferrari" => "My favorite car is Ferrari",
    "McLaren" => "My favorite car is McLaren",
    "Mercedes" => "My favorite car is Mercedes",
    "BMW" => "My favorite car is BMW",
    "Hummer H2" => "My favorite car is Hummer H2",
    default => "My favorite car is not in this.",
};
echo $vehicle;

echo "<br><br>-------------------------------------------------------------------------------";
echo "<h3>If___Elseif Statements</h3>";
$fruits = "Apple";

if ($fruits === "Banana") {
    echo "My favorite fruit is Banana";
} elseif ($fruits === "Mango") {
    echo "My favorite fruit is Mango";
} elseif ($fruits === "Grapes") {
    echo "My favorite fruit is Grapes";
} elseif ($fruits === "Kiwi") {
    echo "My favorite fruit is Kiwi";
} elseif ($fruits === "Apple") {
    echo "My favorite fruit is Apple";
} else {
    // Yeh bilkul 'default' ki tarah kaam karega
    echo "My favorite fruit is not in this.";
}

?>

</body>
</html>
