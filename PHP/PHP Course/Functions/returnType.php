<?php
echo "<h3>Return Type Declaration</h3>";

// curly bracket pela : and datatype declare karvi....

function addNumbers(float $a, float $b) : int {		// integer ma return karavyu
  return $a + $b;
}
echo addNumbers(1.5, 5.2); 


echo "<h3> OR </h3>";

function addNum(float $x, float $y) {	
  return (int) ($x + $y); 	// variable ni aapagal int declare karvu....
}
echo addNum(1.5, 5.2); 

?>
