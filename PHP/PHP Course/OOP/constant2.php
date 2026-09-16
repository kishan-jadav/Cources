<?php

    class Goodbye{
        const MESSAGE = "Thank you for visiting.";

        public function bye(){
            echo self::MESSAGE;         // using const into class
        }
    }

    $goodbye = new Goodbye;
    $goodbye->bye();

?>