<!DOCTYPE html>
<html>
<body>
<h3>Regular Expression Functions</h3>

<?php

echo "-------------- preg_match() Function -----------------------------<br><br>";
$str = "Hello GM, Good";
$pattern = "/G/";
echo preg_match($pattern, $str); 	// hoy to 1 no hoy to 0 



echo "<br><br>-------------- preg_match_all() Function -----------------------------<br><br>";
$str1 = "Hello GM, Good";
$pattern1 = "/G/";
echo preg_match_all($pattern1, $str1);		// count kare



echo "<br><br>-------------- preg_replace() Function -----------------------------<br><br>";
echo preg_replace($pattern1, "#", $str1);		// replace kare



echo "<br><br>-------------- preg_split() Function -----------------------------<br><br>";
$str2 = "Hello GM, How are you?";
$pattern2 = "/ /";
$x = preg_split($pattern2, $str2);		// separator thi string ne divide kari array ma convert kare...
print_r ($x);



echo "<br><br>-------------- preg_grep() Function -----------------------------<br><br>";
$input = [
  "Red",
  "Pink",
  "Green",
  "Blue",
  "Purple"
];

$result = preg_grep("/^p/i", $input);		// match thati value return kare
print_r($result);



?>

</body>
</html>
