<!DOCTYPE html>
<html>
<body>

<?php
echo "<h4>endforeach statement</h4>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;		// foreach ne close karva mate.
?>

</body>
</html>
