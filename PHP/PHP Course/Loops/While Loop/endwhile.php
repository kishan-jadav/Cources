<!DOCTYPE html>
<html>
<body>

<?php  
echo "<h3>endwhile</h3>";
$i = 1;
while($i < 10):
	echo $i;
    $i++;
endwhile;

// jab aap HTML ke beech mein PHP mix karke likhte hain (jaise badi-badi websites ya templates banate waqt), tab {} blocks dhoodhna mushkil ho jata hai ki kaunsa bracket kahan band ho raha hai. Aise mein endwhile; likhne se code padhne mein bahut aasan ho jata hai

?>
</body>
</html>
