<?php

    // create class

    class Fruit{
        // properties
        public $name;
        public $color;

        //method to set properties
        function set_details($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        //method to display properties
        function get_details(){
            echo "Name: " . $this->name . ". Color " .$this->color. ".<br>";
        }

    }



    // create object
    $apple = new Fruit();
    $apple->set_details('Apple','Red');
    $apple->get_details();

    // create object
    $banana = new Fruit();
    $banana->set_details('Banana','Yellow');
    $banana->get_details();

    // create object
    $grapes = new Fruit();
    $grapes->set_details('Grapes','Black');
    $grapes->get_details();
    
    // create object
    $orange = new Fruit();
    $orange->set_details('Orange','Orange');
    $orange->get_details();
?>