<?php

    class Fruit{
        public $name;
        public $color;

        function __construct($name, $color){
            $this->name=$name;
            $this->color=$color;
        }
            
        function intro(){
            echo "Name: $this->name Color: $this->color <br> ";
        }


    }

    class newFruit extends Fruit{

        function message(){
            echo "I am an $this->name. my color is $this->color ";
        }
    }

    $apple = new newFruit("apple", "red");
    $apple->intro();
    $apple->message();


?>