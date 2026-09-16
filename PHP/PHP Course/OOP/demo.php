<?php

class Info{
    public $name;
    public $surname;

    function  __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }    

    function __destruct(){
        echo "Name: " .$this->name. "Surname: " .$this->surname;
    }

    // function get_details(){
    //     echo "Name: " .$this->name. " Surname: " .$this->surname;
    // }
}

// crete object
// $kishan = new Info();
// $kishan->set_details('Kishan','Jadav');
// $kishan->get_details();

$kishan = new Info('Kishan', 'Jadav');
// $kishan->get_details();

$vishal = new Info('Vishal','Makwana');
// $vishal->get_details();





?>