<?php

    class Fruits{
        private $name;

        public function get_details(){
            echo "Name: " .$this->name;
        }
    }

    $Apple = new Fruits();
    $Apple->name = "Apple";     // Error: Cannot access private property
    $Apple->get_details();

?> 