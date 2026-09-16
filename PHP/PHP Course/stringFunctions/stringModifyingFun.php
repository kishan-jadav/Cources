<!DOCTYPE html>
<html>
<body>
<h3> String Functions <h3>

<?php
echo "<h4>strpos() Function</h4>";  // String ma kai position upar che te janva...
$a = "Hello GM";
echo strpos($a, "GM");


echo "<h4>str_replace() Function</h4>";  // string ma koi particular word replace karva.
echo str_replace("GM", "Get Money",$a);

echo "<h4>substr() Function</h4>";  // string mathi specific part extract karva mate....
echo substr($a, 6, 7);

?>

</body>
</html>
