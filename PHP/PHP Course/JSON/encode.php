<?php 
    echo "<h4>json_encode() Function - encode a value JSON format</h4>";

    $age = ["Kishan" => "21", "Shital" => "28", "Naresh" => "20"];
    echo json_encode($age);

    echo "<br><br>";

    $vehicle = ["Lambo", "Ferrari", "Mclaren"];
    echo json_encode($vehicle);
?>