<!DOCTYPE html>
<html>
<body>

<?php
$email = "admin@example.com";

if (strpos($email, "admin")!==(false)) {	// !==(false) use na karie to admin ma a ni position 0 aave and 0 = false thay etle use karvu pade che.
    echo "Access Granted";
} else {
    echo "Access Denied";
}
?>

</body>
</html>
