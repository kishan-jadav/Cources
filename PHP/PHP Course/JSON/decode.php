<?php 
    echo "<h4>json_decode() Function - decode a JSON object into a PHP object or an associative array.</h4>";

    $jsonobj = '{"Kishan":"21", "Shital":"28", "Naresh":"20"}';
    var_dump(json_decode($jsonobj));

    echo "<br><br>";

    $vehicle = '["Lambo", "Ferrari", "Hummer H2"]';
    var_dump(json_decode($vehicle, true));
?>