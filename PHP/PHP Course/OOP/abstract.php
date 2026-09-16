<?php
// Abstact Classes
// Abstract class contain atleast 1 abstract function
// Abstract function:- must declare but not implement
// Abstract class could not create object
// Abstract class, child class must contain abstract function

    abstract class bank{
        abstract function id_proof();
        function xyz(){
            
        }
    }

    class hdfc extends bank{
        function test(){
            echo "Test";
        }
    }

    class sbi extends bank{
        function test(){
            echo "Test";
        }
    }


?>