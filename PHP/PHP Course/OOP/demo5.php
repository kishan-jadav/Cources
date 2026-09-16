<?php

    abstract class car{     // abstract base class
        public $name;

        public function __construct($name){     // Non abstract method
            $this->name = $name;
        }

        abstract public function intro();   //Abstract method - forces child classes to implement it 
    }

    class lambo extends car{
        public function intro(){
            echo "I'm $this->name car.<br>";
        }
    }

    class ferrari extends car{
        public function intro(){
            echo "I'm $this->name car.<br>";
        }
    }

    class hummer extends car{
        public function intro(){
            echo "I'm $this->name car.";
        }
    }

    // create objects
    $lambo = new lambo("Lambo");
    $lambo->intro();

    $ferrari = new ferrari("Ferrari");
    $ferrari->intro();

    $hummer = new hummer("Hummer");
    $hummer->intro();
?>