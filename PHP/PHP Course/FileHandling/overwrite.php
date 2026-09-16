<?php
echo "<h3>Overwrite </h3>";

$myfile = fopen("newfile.txt", "w");        // w mode ma file ma write thashe
$txt = "Mickey Mouse<br>";
fwrite($myfile, $txt);
$txt = "Minnie Mouse<br>";
fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!"); // farivar write karie to old data new data sathe replace thy jashe etle "a" mode use karvo jethi old data remove na thay
$txt = "Donald Duck<br>";
fwrite($myfile, $txt);
$txt = "Goofy Goof<br>";
fwrite($myfile, $txt);
fclose($myfile);

readfile("newfile.txt");
?>