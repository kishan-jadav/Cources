<?php

//Define class
class vehicle{
    public $name;
    public $color;


    function set_details($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_details(){
        echo "Name: " .$this->name. " Color: " .$this->color. "<br><br>";
    }
}

//Create objects
$hummer = new vehicle();
$hummer->set_details('Hummer','Black');
$hummer->get_details();

$defender = new vehicle();
$defender->set_details('defender','gray');
$defender->get_details();

$ferrari = new vehicle();
$ferrari->set_details('ferrari','ferrari');
$ferrari->get_details();
?>