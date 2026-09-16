<?php

    class Fruits{
        public $name;

        public function get_details(){      // public 
            echo "Name: " .$this->name;
        }
    }

    $Apple = new Fruits();
    $Apple->name = "Apple";     // can be accessed directly
    $Apple->get_details();

?>