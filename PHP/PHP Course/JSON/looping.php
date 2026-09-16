<?php 
    echo "<h4> loop through the values of a PHP object:</h4>";

    $jsonobj = '{"Kishan":"20", "Vishal":"19"}';
    $obj = json_decode($jsonobj);

    foreach($obj as $key => $value){
        echo $key . " => " .$value."<br>";
    }

//----------------------------------------------------------------

    echo "<h4> loop through the values of a PHP associative array:</h4>";

    $jsonobj1 = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj1, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>  