<?php

    class Fruits{
        public $name;
        public $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "Name: $this->name and Color: $this->color";
        }
    }

    class Fruits1 extends Fruits{
            public function info(){
                echo "I am an $this->name. My color is $this->color";
            }
            const MESSAGE = "Thank You !";

    }

    $chiku = new Fruits1("'Chiku'","'Brown'");
    $chiku->info();
    
    echo Fruits1::MESSAGE;  
?>