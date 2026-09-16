<!DOCTYPE html>
<html>
<body>

<?php
$age = "18"; // String type

$result = match($age) {
    18 => "Can vote (Integer)",
    "18" => "Can vote (String)",	// match ma === use thay etle datatype pn check thy, switch case ma == use thay
    default => "Cannot vote"
};

echo $result;
?>

</body>
</html>
