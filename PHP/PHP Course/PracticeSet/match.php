
<!DOCTYPE html>
<html>
<body>

<?php
// Use match 
$marks = 50;

$result = match(true){
	$marks >= 90 => "Excellent",
    $marks >= 70 && $marks <= 89 => "Good Performance",
    $marks < 70 => "Needs Improvement",
};

echo $result;

?>

</body>
</html>
