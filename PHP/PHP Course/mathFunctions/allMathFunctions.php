<!DOCTYPE html>
<html>

<body>
<h2> PHP Math Functions</h2>
<?php
echo "<h4>abs() Function</h4>";
echo abs(-9.21);	// convert into absolute(positive) value
echo "<br><br>";

echo "<h4>acos() Function</h4>";	// return Angle value of Cos
echo(acos(0.64));	//cos ni value mathi angle value return kare
echo "<br><br>";

echo "<h4>asin() Function</h4>";	// return Angle value of Sine
echo asin(1);
echo "<br><br>";

echo "<h4>atan() Function</h4>";	// reutrnAngle value of Tan
echo atan(100);
echo "<br><br>";

echo "<h4>base_convert() Function</h4>";	
$a = "E309";
echo base_convert($a, 16, 8);	// Convert 16 = Hexadecimal to 8 = Octal 
echo "<br><br>";

echo "<h4>bindec() Function</h4>";	// convert Binart to Decimal
echo bindec(1101);
echo "<br><br>";

echo "<h4>decbin() Function</h4>";	// convert Decimal to Binary
echo decbin(13);
echo "<br><br>";

echo "<h4>dechex() Function</h4>";	// convert Decimal to Hexadecimal
echo dechex(13);
echo "<br><br>";

echo "<h4>hexdec() Function</h4>";	// convert Hexadecimal to Decimal
echo hexdec(13);
echo "<br><br>";

echo "<h4>decoct() Function</h4>";	// convert Decimal to Octal
echo decoct(11);
echo "<br><br>";

echo "<h4>octdec() Function</h4>";	// convert Octal to Decimal
echo octdec(11);
echo "<br><br>";

echo "<h4>round() Function</h4>";	// Round = Najik ni integer value
echo round(2.50);
echo "<br><br>";

echo "<h4>ceil() Function</h4>";	// Ceil = Chhat
echo ceil(2.10);	// Point pachhi kai pn number hoy to te value ne tena pachhi ni integer value ma convert kare
echo "<br><br>";

echo "<h4>floor() Function</h4>";	// Floor = Taliyu
echo floor(2.90);
echo "<br><br>";

echo "<h4>cos() Function</h4>";
echo cos(3);	// Angle ni value ne Cos value ma convert kare
echo "<br><br>";

echo "<h4>deg2rad() Function</h4>";
echo deg2rad("45");		// convert Degree into Radian
echo "<br><br>";

echo "<h4>fmod() Function</h4>";	// f = floating point, mod = modulo, bhagakar karta je shesh vadhe te return kare
echo fmod(15, 6);	// 15/6 = shesh = 3 
echo "<br><br>";

echo "<h4>getrandmax() Function</h4>";
echo getrandmax();			// rand() function maximum ketla random number print kare 
echo "<br><br>";

echo "<h4>rand() Function</h4>";	// old version 
echo rand();	// random number generate kare....
echo "<br><br>";

echo "<h4>mt_rand() Function</h4>";
echo mt_rand();		// ye new rand() ka new version hai, safe an secure
echo "<br><br>";

echo "<h4>intdiv() Function</h4>";	// bhagakar karta je bhagfal(ans) male te return kare
echo intdiv(15,3);			// 15/3 = 5 = bhagfal
echo "<br><br>";

echo "<h4>is_finite() Function</h4>";	// shu limit ma che ?
echo is_finite(2)."<br>";	// check kare ke computer ni calculation limit ma che ?, hoy to 1 return kare
echo is_finite(99999999);
echo "<br><br>";

echo "<h4>is_infinite() Function</h4>";	// shu limit bar che ?
echo is_infinite(2)."<br>";	// check kare ke computer ni calculation limit bar che ?, hoy to 1 return kare
echo is_infinite(log(0)); // return 1 = ha, che.
echo "<br><br>";

echo "<h4>is_nan() Function</h4>";	// not a number che ? (number nathi ?)
echo is_nan(200) . "<br>"; // number che = 0
echo is_nan(acos(1.01));	// number nathi = 1

echo "<h4>min() Function</h4>";
echo min(-89, -8, 0.54, 66, 1, 999);	// sauthi nano number find kare
echo "<br><br>";

echo "<h4>max() Function</h4>";
echo max(-89, -8, 0.54, 66, 1, 999);	// sauthi moto number find kare
echo "<br><br>";

echo "<h4>pi() Function</h4>";  
echo pi();      // pi ni value return kare
echo "<br><br>";

echo "<h4>pow() Function</h4>";	// Power = Ghataank
echo pow(2, 5);		// 2 x 2 x 2 x 2 x 2 = 32
echo "<br><br>";

echo "<h4>sqrt() Function</h4>";	// Square root
echo sqrt(25);
echo "<br><br>";

echo "<h4>sin() Function</h4>";	
echo sin(3);        // Angle ni value ne Sine value ma convert kare
echo "<br><br>";
?>

</body>
</html>
