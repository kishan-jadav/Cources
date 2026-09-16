<!DOCTYPE html>
<html>

<body>

    <?php
    function divide($x, $y){
        if ($y == 0) {
            throw new Exception("Cannot divide by zero.");
        }
        return $x / $y;
    }

    try {
        echo divide(5, 0);
    } catch (Exception $e) {
        $code = $e->getCode();
        $message = $e->getMessage();
        $file = $e->getFile();
        $line = $e->getLine();
        echo "Exception thrown in $file on line $line: [Code $code] $message<br>";
        echo "File is $file <br>";
        echo "Code is $code <br>";
        echo "Message is $message <br>";
        echo "Line is $line";
    }
    ?>

</body>

</html>