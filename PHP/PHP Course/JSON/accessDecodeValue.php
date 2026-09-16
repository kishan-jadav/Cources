<?php 
     echo "<h3>Accessing the Decoded Values</h3>";
     // Object mathi decoded value access karvi..

    echo "<h4>Accession the decoded value from PHP Object</h4>";
    $jsonobj = '{"Kishan":"21", "Shital":"28", "Naresh":"20"}';

    $obj = json_decode($jsonobj);

    echo $obj -> Kishan;    echo "<br>";
    echo $obj -> Shital;    echo "<br>";
    echo $obj -> Naresh;    echo "<br>";

//-----------------------------------------------------------------------

    echo "<h4>Accession the decoded value from PHP Array</h4>";
    $jsonobj1 = '{"Matel":"19","Chando":"19","Vishal":"20"}';

    $arr = json_decode($jsonobj1, true);

    echo $arr["Matel"];     echo "<br>";
    echo $arr["Chando"];    echo "<br>";
    echo $arr["Vishal"];    echo "<br>";

?>