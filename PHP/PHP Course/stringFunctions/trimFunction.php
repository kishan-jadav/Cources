<!DOCTYPE html>
<html>
<body>
<h3> String Functions <h3>

<?php

echo "<h4>trim() function</h4>";
// string ni starting and ending mathi blank space remove kare.

echo "<pre>";
$x = "       Hello     GM";
echo trim($x);
echo "</pre>";

echo "<h4>trim() function</h4>";
// String ni starting and end mathi character remove kari shako but vachche thi na thay.
$a = "Hello World!";
echo trim($a,"Hed!");

echo "<h4>ltrim() function</h4>";
// String ni left side mathi word/character remove kare...
echo ltrim($a, "World!")."<br>"; // not work because only left side word remeve.
echo ltrim($a, "Hello");    // output: " World!" because only left side word remove.

echo "<h4>rtrim() function</h4>";
echo rtrim($a, "World!");

?>

</body>
</html>
