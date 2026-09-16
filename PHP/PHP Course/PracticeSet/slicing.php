<!DOCTYPE html>
<html>
<body>

<?php
// Mujhe output chahiye: PHP's "Slicing" is fun
echo "<h4>Use single quotes</h4>";
$string = 'PHP\'s "Slicing" is fun';	// 's ni aagal \ use karvo
echo substr($string, 0, 22);

echo "<br><br>";
echo "======= OR =========";

echo "<h4>Use double quotes</h4>";
$string1 = "PHP's \"Slicing\" is fun";	// " ni aagal \ use karvo
echo substr($string1, 0, 22);


?>

</body>
</html>
