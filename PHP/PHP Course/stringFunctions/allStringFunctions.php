<!DOCTYPE html>
<html>
<body>

<?php 
echo "<h3>String Functions</h3>";

$a = "Hello GM";

echo "<h4>addcslashes() function</h4>";
$add = addcslashes($a, "G"); // add a backslash in front of the character
echo $add;
echo "<br><br>";

echo "<h4>addslashes() Function</h4>";
echo addslashes('Hello "GM"'); // Add a backslash in front of each double quote 
echo "<br><br>";

echo "<h4>intval() Function</h4>";
echo intval(1.50);	// point pachi nu remove kari nakhe
echo "<br><br>";

echo "<h4>bin2hex() Function</h4>";
echo bin2hex("Hello GM"); // convert binary to hexadecimal value
echo "<br><br>";

echo "<h4>hex2bin() Function</h4>";
echo hex2bin("48656c6c6f20474d");   // Hexadecimal value ne binary ma convert kare
echo "<br><br>";

echo "<h4>chop() Function</h4>";
echo chop("Hello GM","GM"); // remove characters from the right ends of the string
echo "<br><br>";

echo "<h4>chunk_split() Function</h4>";
echo chunk_split($a, 2, ".");  // split the string after each character and add a "." after each split
echo "<br><br>";

echo "<h4>count_chars() Function</h4>";
echo count_chars($a,3);	// string ma duplicate char ne remove kari only 1 time print kare
echo "<br><br>";

echo "<h4>convert_uuencode() Function</h4>";
echo convert_uuencode($a);  // convert string into encode formate
echo "<br><br>";

echo "<h4>convert_uudecode() Function</h4>";
echo convert_uudecode("(2&5L;&\@1TT` `"); // convert encoded formate into decode formate
echo "<br><br>";

echo "<h4>crypt() Function</h4>";
$pwd = "kishan123";
$salt = "sk";	// password ne strong banavava
$spwd = crypt($pwd, $salt);		// convert into high secured incrypted formate
echo $spwd;
echo "<br><br>";

echo "<h4>join() Function</h4>";
$arr1 = ['Kishan','Shital','Vishal'];
echo join($arr1); // array mathi string ma convert kare
echo "<br><br>";
echo join(" ", $arr1); // use " " blank separator
echo "<br><br>";

echo "<h4>implode() Function</h4>";
$arr = ["Kishan", "Shital", "Naresh", "Vishal"];	
echo implode(",", $arr);	// convert in array to string by separator
echo "<br><br>";

echo "<h4>explode() Function</h4>";
$exp = explode(" ", $a); // convert in string to an array by separator
print_r($exp);
echo "<br><br>";

echo "<h4>str_split() Function</h4>"; 	
print_r (str_split("Hello"));	// String na badha character ne array ma convert kare
echo "<br><br>";


echo "<h4>lcfirst() Function</h4>";
echo lcfirst($a);	//convert lower case first character in to the string
echo "<br><br>";

echo "<h4>levenshtein() Function</h4>";
echo levenshtein("Kishan","ishan");	// ek word ne bija word jevo banavava ketla character change karva pade te number batave
echo "<br><br>";

echo "<h4>strcasecmp() Function</h4>";
echo strcasecmp("Hello world!","HELLO WORLD!");		// String Case Compare :- banne string ni compare kare
echo "<br><br>";

echo "<h4>similar_text() Function</h4>";
echo similar_text("Kishan","ishan"); // banne ma ketla character similar che te count kare
echo "<br><br>";

echo "<h4>trim() Function</h4>";
echo trim($a); // string ni first and last ma koi blank space hoy to te remove kare
echo "<br>";
echo trim($a,"M");	// string mathi first and last ma jo specifi karelo word/character hoy to tene remove kare
echo "<br>";
echo ltrim($a,"He"); // string ni left side thi specified character/word remove kare
echo "<br>";
echo rtrim($a, "M"); // string ni right side thi specified character/word remove kare
echo "<br><br>";

echo "<h4>md5() Function</h4>";
echo md5("Kishan");		// Kishan ne 32 character ma hashing kari nakhe (incripte kare)
echo "<br><br>";

echo "<h4>metaphone() Function</h4>";
echo metaphone("Punjabi");	// bolvama te word jevu j sound aave teva formate ma convert kare
echo "<br><br>";

echo "<h4>soundex() Function</h4>"; 
echo soundex("Kishan");		// Word ne 4 character ma sound index na formate ma store kare..
echo "<br><br>";

echo "<h4>nl2br() Function</h4>";
echo nl2br("One line \n Another line");  //  \n ni jagya e <br> tag no use kare
echo "<br><br>";

echo "<h4>number_format() Function</h4>";
echo number_format(100000000,2);	// number ne formate kare
echo "<br><br>";

echo "<h4>ord() Function</h4>"; // Ordiate
echo ord("S");	// convert character into his ASCII value
echo "<br><br>";

echo "<h4>chr() Function</h4>";
echo chr(83);  // Return characters from different ASCII values
echo "<br><br>";

echo "<h4>parse_str() Function</h4>"; 
// ek lambi string wali string ne todine variable ma convrt karva..
// old php ma chaltu hatu, hack thavana reasone thi have tene remove kari didhu che...

echo "<h4>printf() Function</h4>"; 
$num = 9;
$str = "India";												// variable mathi data lay ne string ma nakhe
printf("There are %u million bicycles in %s.",$num,$str);	// %u number mate and %s string mate use kare, direct print kari de
echo "<br><br>";

echo "<h4>sprintf() Function</h4>"; 
$txt = sprintf("There are %u million bicycles in %s.",$num,$str);	// variable ma save karine rakhe direct princt na kare
echo $txt;
echo "<br><br>";

echo "<h4>vprintf() Function</h4>"; 	// v = array
$number = 9;
$str = "Beijing";		
$a = vprintf("There are %u million bicycles in %s.",array($number,$str));	// array mathi data lay ne string ma nakhe
echo "<br><br>";

echo "<h4>vsprintf() Function</h4>"; 	// v = array, s = save into variable
$number = 9;
$str = "Beijing";
$txt = vsprintf("There are %u million bicycles in %s.",array($number,$str));	// array mathi data ly ne string ma nakhe and tene variable ma save kare
echo $txt;
echo "<br><br>";

echo "<h4>quotemeta() Function</h4>"; 
$str3 = "Hello world. (can you hear me?)";
echo quotemeta($str3);	// string mathi predefined function ni aagal "\" add kare.
echo "<br><br>";

echo "<h4>sha1() Function</h4>"; 
$str4 = "Hello";
echo sha1($str4);	// Secure Hash Algorithm :- data incrypted code ma hide kare
echo "<br><br>";

echo "<h4>sscanf() Function</h4>"; 
$str5 = "age:30 weight:60kg";
sscanf($str5,"age:%d weight:%dkg",$age,$weight);	// String Scan Formate :- stringmathi name or text ne variable ma store kare
var_dump($age,$weight);
echo "<br><br>";

echo "<h4>str_contains() Function</h4>"; 
$txt = "I really love PHP!";
var_dump(str_contains($txt, "love"));	// String ma te word che ke nahi te find kare
echo "<br><br>";

echo "<h4>str_starts_with() Function</h4>"; 
$txt = "I really love PHP!";
var_dump(str_starts_with($txt, "PHP!"));  // string specific word thi start thay che ke nahi te check kare.
echo "<br><br>";

echo "<h4>str_ends_with() Function</h4>"; 
$txt = "I really love PHP!";
var_dump(str_ends_with($txt, "PHP!"));  // string specific word thi end thay che ke nahi te check kare.
echo "<br><br>";

echo "<h4>str_getcsv() Function</h4>"; 
$str = "Rahul, 22, Delhi, B.Tech";
$data = str_getcsv($str);	// String Get CSV (Comma Separated Values) :- string mathi .(comma) thi separate kari array ma convert kare
print_r($data);

echo "<h4>str_replace() Function</h4>";		// casesensitive
echo str_replace("GM", "Get Money", "Hello GM" );	// string ma specific word replace karva
echo "<br><br>";

echo "<h4>strtr() Function</h4>";	// String Translate
echo strtr("Hilla Warld","ia","eo");	// replace the character 
echo "<br><br>";

echo "<h4>str_ireplace() Function</h4>"; 	// not casesesitive
echo str_ireplace("gm", "Get Money", "Hello GM");	// string ma specific word replace karva
echo "<br><br>";

echo "<h4>str_pad() Function</h4>"; 	
$str = "Hello World";
echo str_pad($str,20,".");	// string ma right side padding aapva mate
echo "<br><br>";

echo "<h4>str_repeat() Function</h4>"; 	
echo str_repeat("Kishan",5);	// word or character ne repeat karva mate
echo "<br><br>";

echo "<h4>str_rot13() Function</h4>"; 	// String Rotate by 13
echo str_rot13("Kishan Jadav");		// 26/2=13 : string ne abcd na 26 character ma encode kare
echo "<br>";
echo str_rot13("Xvfuna Wnqni");		// string ne abcd na 26 character ma decode kare
echo "<br><br>";

echo "<h4>str_shuffle() Function</h4>"; 	
echo str_shuffle("Hello GM");	// String na badha character ne dar vakhte aada savla kari nakhe
echo "<br><br>";

echo "<h4>str_word_count() function</h4>"; 	
echo str_word_count($a);	// string mathi word count kare
echo "<br><br>";

echo "<h4>strcasecmp() function</h4>"; 	
echo strcasecmp("Hello world!","HELLO WORLD!");		// String Case Compare :- banne string ni compare kare....
echo "<br><br>";

echo "<h4>strncmp() function</h4>"; 	
echo strncmp("Hello world!","Hello earth!",6);	// String Number Compare:- aapel position sudhi compare kare...
echo "<br><br>";

echo "<h4>strcspn() function</h4>";	// String Complement Span(Length)
echo strcspn("Hello World","r");	// specified word sudhi position count kare
echo "<br><br>";

echo "<h4>strip_tags() function</h4>"; 	
echo strip_tags("Hello <b>world!</b>");		// string mathi html tag ne remove kare
echo "<br><br>";

echo "<h4>stripslashes function</h4>"; 	
echo stripcslashes("Hello \World!");	// String mathi "\" remove kare che...(Simple use mate)
echo "<br><br>";

echo "<h4>stripcslashes function</h4>"; 	
echo stripcslashes("Hello \World!");	// String mathi "\" remove kare che...(Programming mate use thay)
echo "<br><br>";

echo "<h4>strpos() function</h4>"; 
echo strpos("Hello World!","W");	// String ma position kya che te print kare
echo "<br><br>";

echo "<h4>strripos() function</h4>"; // case sensitive
echo strrpos("I love php, I love php too!","php");	// reverse mathi search kare and te postion ne print kare
echo "<br><br>";

echo "<h4>strripos() function</h4>"; // case insensitive
echo strripos("I love php, I love php too!","PHP");	// reverse mathi serch kare and te position ne print kare
echo "<br><br>";

echo "<h4>strstr() function</h4>"; 
echo strstr("Hello world!, Good","world");	// string ma specific word thi last sudhi print kare aagal nu print na kare(casesensitive)
echo "<br><br>";

echo "<h4>strrchr() function</h4>"; 
echo strrchr("Hello world!, Good world GM","world"); // last mathi check kare and te position thi last sudhi print kare
echo "<br><br>";

echo "<h4>strrev() function</h4>"; 
echo strrev("Hello GM");	// String ne reverse kare
echo "<br><br>";

echo "<h4>strpbrk() function</h4>"; //String Position Break
echo strpbrk("Hello world!","oe"); 	// jya selected character male tya thi last sudhi string print kare
echo "<br><br>";

echo "<h4>strlen() function</h4>"; 
echo strlen("Kishan");	// string ni length print kare
echo "<br><br>";

echo "<h4>strnatcasecmp() function</h4>"; 	//String Natural Caseinsensitiv Compare -> chota = -1 	barabar = 0	   bada = 1
echo strnatcasecmp("2Hello world!","10Hello WORLD!");	// 2<10 = first chhota = -1
echo "<br>";
echo strnatcasecmp("10Hello world!","2Hello WORLD!");	// 10>2 = first bada = 1

echo "<h4>strcasecmp() function</h4>"; 
echo strncasecmp("Hello world!","hello earth!",6);	// number ni position sudhi word count kare (not case sensitive)
echo "<br><br>";

echo "<h4>strspn() function</h4>"; 
echo strspn("Hello world!","kHlleo");	// string ni starting ma aapela chararacter sequence ma(lagatar) ketla che
echo "<br><br>";

echo "<h4>strtolower() function</h4>"; 
echo strtolower("Hello GM");	// string ne lowercase ma convert kare
echo "<br><br>";

echo "<h4>strtoupper() function</h4>"; 
echo strtoupper("Hello GM");	// string ne uppercase ma convert kare
echo "<br><br>";

echo "<h4>ucfirst() function</h4>"; 
echo ucfirst("hello World!");	// uppercase first character
echo "<br><br>";

echo "<h4>ucwords() function</h4>"; 
echo ucwords("hello world, how are you ?");	// every word na first letter ne capitalize kare
echo "<br><br>";

echo "<h4>substr() function</h4>"; 
echo substr("Hello world",6, 2);	// string ne slicing karva mate
echo "<br><br>";

echo "<h4>substr_compare() function</h4>"; // Match kare to 0 return kare
echo substr_compare("Beautiful Day","Day",10);	// 10th position thi check kare aapel word match kare che ke nahi.  
echo "<br><br>";

echo "<h4>substr_count() function</h4>"; 
echo substr_count("Hello world. The world is nice","world");	// string ma te word ketli repear thay te count kare...
echo "<br><br>";

echo "<h4>substr_replace() function</h4>";	// position thi replace karva mate use thay 
echo substr_replace("Hello","world",0); // 0 will start replacing at the first character in the string
echo "<br><br>";

echo "<h4>wordwrap() function</h4>";
$str = "An example of a long word is: Supercalifragulistic";	
echo wordwrap($str,15,"<br>");	// 15 thi new line ma shift thy javu


?>

</body>
</html>
