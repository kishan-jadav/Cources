<!DOCTYPE html>
<html>
<body>

<h3>Regular Expression Pattern</h3>
<?php 
echo "<br><br>---------------- [abc] pattern -------------------------------------<br>";
$txt = "Hello GM, Get Money, gain";
echo "<br>";
$pattern = "/[Go]/";		// [Go] ni andar na G and o ne find kare

echo preg_match_all($pattern, $txt);
echo "<br>";
echo $txt."<br>";
echo preg_replace($pattern, "#", $txt);



echo "<br><br>---------------- [^abc] pattern -------------------------------------<br>";
$txt1 = "Welcome";
$pattern1 = "/[^eo]/";		//eo sivay na ketla character che te count kare

echo preg_match_all($pattern1, $txt1);
echo "<br>";
echo preg_replace($pattern1, "#", $txt1);



echo "<br><br>---------------- [a-z] pattern -------------------------------------<br>";
$txt2 = "WelcoMme";
$pattern2 =  "/[e-o]/";		// alphabetically e to o vachche aavta hoy te count kare...

echo preg_match_all($pattern2, $txt2);
echo "<br>";
echo preg_replace($pattern2, "#", $txt2);



echo "<br><br>---------------- [A-Z] pattern -------------------------------------<br>";
$txt3 = "Welcome";
$pattern3 =  "/[A-Z]/";		// alphabetically A to Z vachche aavta hoy te count kare...

echo preg_match_all($pattern3, $txt3);
echo "<br>";
echo preg_replace($pattern3, "#", $txt3);



echo "<br><br>---------------- [125] pattern -------------------------------------<br>";
$txt4 = "1234561209";		// [125]mathi 1,2 and 5 ne search kare ke ketla che ?
$pattern4 = "/[125]/";

echo preg_match_all($pattern4, $txt4);
echo "<br>";
echo preg_replace($pattern4,"#", $txt4);



echo "<br><br>---------------- [2-6] pattern -------------------------------------<br>";
$txt5 = "Call 15293456176";
$pattern5 = "/[2-6]/";		//[2-6] = 2,3,4,5,6 aavta hoy to tene count kare

echo preg_match_all($pattern5, $txt5);
echo "<br>";
echo preg_replace($pattern5, "#", $txt5);


echo"<h4>Metacharacter</h4>";
echo "<br><br> | = thi separate kara hoy te count kare...<br><br>";
echo "<br><br> . = total ketla character and digit che te count kare<br><br>";
echo "<br><br> ^ = starting ma che ke nahi te find and count kare <br><br>";
echo "<br><br> $ = ending ma che ke nahi te find and  count kare<br><br>";
echo "<br><br> \d = ketla digit(number) che te count kare<br><br>";
echo "<br><br> \D = ketla digit(number) nathi te count kare<br><br>";
echo "<br><br> \s = ketla white space che te count kare<br><br>";
echo "<br><br> \S = ketla white space sivay na che te count kare<br><br>";
echo "<br><br> \w = ketla alphabetically(character) and number che te count kare<br><br>";
echo "<br><br> \W = ketla alphabetially(character) and number nathi te count kare<br><br>";
echo "<br><br> \b = specific character (ex.Hel) thi starting thay che te find kare <br><br>";


?>




</body>
</html>
         