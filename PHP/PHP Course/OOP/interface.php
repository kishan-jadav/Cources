<?php
// Interface
// Interface support multiple inheritance
// Interface can only contain abstact funtion
// In interface we can not define variables
// No constructor in interface
// All function must be public
// Interface support multiple inheritance

interface class1{
    public function test1();
}

interface class2{
    public function test2();
}

class class3 implements class1, class2{
    public function test1(){
        echo "Test1 <br>";
    }

    public function test2(){
        echo "Test2 <br>";
    }


}

$obj = new class3();
$obj->test1(); 
$obj->test2();

?>