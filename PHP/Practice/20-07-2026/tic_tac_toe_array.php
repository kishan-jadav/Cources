<?php
// Create a multidimensional array to represent a tic-tac-toe board. Initialize the board with empty values, and then display it on the screen.
/*
       |   |   
    ---|---|---
       |   |   
    ---|---|---
       |   |   
    */

// create tic-tac-toi multidimensional array
$array = [
    [" ", " ", " "],
    [" ", " ", " "],
    [" ", " ", " "]
];


echo "<h4>Tic-Tac-Toe Board </h4>";
echo "<pre>";
for ($i = 0; $i < 3; $i++) {
    echo " " . $array[$i][0] . " | " . $array[$i][1] . " | " . $array[$i][2] . "\n";
    if ($i < 2) {
        echo "---|---|---\n";
    }
}
echo "</pre>";

$array[0][0] = "O";
$array[0][1] = "X";
$array[0][2] = "O";
$array[1][0] = "X";
$array[1][1] = "O";
$array[1][2] = "X";
$array[2][0] = "O";
$array[2][1] = "X";
$array[2][2] = "O";

echo "<pre>";
for ($i = 0; $i < 3; $i++) {
    echo " " . $array[$i][0] . " | " . $array[$i][1] . " | " . $array[$i][2] . "\n";
    if ($i < 2) {
        echo "---|---|---\n";
    }
}
echo "</pre>";

?>