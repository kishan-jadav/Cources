<html>
    <body>
        <pre>
try {
    code that can throw an exception
} catch(Exception $e) {
    code to run when an exception is caught
} finally {
    code that always runs regardless of exception
}
        </pre>
    </body>
</html>


<?php 

function divide($x, $y){
    if($y == 0){
        throw new Exception("Cannot divide by zero.");
    }
    return $x/$y;
}

try{
    echo divide(5, 0);  // Exception throw thay try ma 
}catch(Exception $e){
    echo 'Error: '. $e->getMessage();   // show exception message
}finally{
    echo "<br> Process complete.";
}

?>