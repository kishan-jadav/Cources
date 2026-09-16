<?php

    class Fruits{
        protected $name;

        function get_details(){
            echo "Name: " .$this->name;
        }
    }

    $banana = new Fruits();
    $banana->name = "banana";       // Error: Cannot access protected property
    $banana->get_details();
    

?>