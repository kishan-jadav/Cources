<!DOCTYPE html>
<html>
<body>

<?php
$score = 85;
$status = ($score >= 50) ? "Passed" : "Failed";	//Output:Passed (85 is greater than 50)

$message = match($status) {		// $status = Passed
    "Passed" => "Great job!😊",	// Condition is true
    "Failed" => "Try again!😔",
    default => "Unknown status"
};

echo $message;		// Output: Great job!

?>

</body>
</html>
