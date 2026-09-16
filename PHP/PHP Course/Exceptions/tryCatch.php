<html>

<body>
    <head><h3>try...catch keyword</h3></head>
    <pre>
Syntax:

try {
  code that can throw an exception
} catch(Exception $e) {
  code to run when an exception is caught
}
        </pre>
</body>

</html>

<?php 
    function divide($x, $y){
        if($y == 0){
            throw new Exception("Cannot divide by zero");
        }
        return $x/$y;
    }

    try{
        echo divide(5,0);   // Exception throw thay and code continue thay.....
    }catch(Exception $e){
        echo 'Error: ' .$e->getMessage();
    }

    echo "<br>Hello";

?>