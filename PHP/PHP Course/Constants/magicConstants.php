<!DOCTYPE html>
<html>
<body>

<h2>PHP Magic Constants</h2>
==================
<?php
// Magic Constants = predifined function ke jeni value fix naa hoy
// name ni aagal pachal double underscore(__) lagadvama aave che.
// case insensitive

// =================================================================================

echo "<h3>__CLASS__ </h3>";	// class nu name return kare

class Fruits{
	public function myValue(){
    return __CLASS__;
    }
}

$apple = new Fruits();
echo $apple->myValue();
echo "<br><br>";

// --------------------------------------------------------------------------------
echo "<h3>__DIR__ </h3>";	// file ni directory nu name return kare
echo __DIR__;
echo "<br><br>";

//---------------------------------------------------------------------------------
echo "<h3>__FILE__ </h3>";	// file no full path return kare
echo __FILE__;
echo "<br><br>";

// --------------------------------------------------------------------------------
echo "<h3>__FUNCTION__ </h3>";	// function nu name return kare
function myFunction(){
	return __FUNCTION__;
}
echo myFunction();
echo "<br><br>";


//-------------------------------------------------------------------------------
echo "<h3>__LINE__ </h3>";	// this constant return current line number
echo __LINE__;
echo "<br><br>";

//-------------------------------------------------------------------------------
echo "<h3>__METHOD__ </h3>";	// class and function nu name return kare
class Fruits2{
	public function myValue(){
    return __METHOD__;
    }
}
$mango = new Fruits2();
echo $mango->myValue();
echo "<br><br>";

//-------------------------------------------------------------------------------
echo "<h3>__NAMESPACE__ </h3>";	// this constant return the name of the namespace
echo "<br><br>";

//-------------------------------------------------------------------------------
echo "<h3>__TRAIT__ </h3>";	// this constant return TRAIT name
echo "<br><br>";

//-------------------------------------------------------------------------------
echo "<h3>ClassName::class </h3>";	// Returns the name of the specified class and the name of the namespace, if any.
echo "<br><br>";


?>
 
</body>
</html>
