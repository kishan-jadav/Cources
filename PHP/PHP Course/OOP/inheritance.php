<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function intro(){
        echo "The fruit name is " .$this->name. "and color is ".$this->color . "<br>";
    }
}
    // strawberry is inherited from Fruit
    class Strawberry extends Fruit{
        public function message(){
            echo "Am I a Fruit or berry ?";
        }
    }

    $strawberry = new Strawberry("Strawberry","red");
    $strawberry->intro();
    $strawberry->message();



?>