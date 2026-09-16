<?php
    class Employee{
        // class properties 
        public $name;
        public $salary;

        // constructor with arguments -> jyare new object banavo tyare automatically call thy jaay  
        function __construct($name, $salary){
            $this->name = $name;
            $this->salary = $salary;
        }

        function __destruct(){      // destruct(destroy) - object destroy thy jaay
            echo "$this->name destruction.<br>";
        }

    }


    $rohan = new Employee("Rohan", 73000);
    $harry = new Employee("Harry", 44000);
    $kishan = new Employee("Kishan", 5000);

    echo "The salary of rohan is $rohan->salary <br>";
    echo "The salary of harry is $harry->salary <br>";
    echo "The salary of kishan is $kishan->salary <br>";

?>