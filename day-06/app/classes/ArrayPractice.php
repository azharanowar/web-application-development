<?php

namespace App\classes;

class ArrayPractice
{
    public $message, $names;
    public function __construct() {
        $this->message = "Hello from Array Practice File";
        $this->names = ["Azhar Anowar", "Fozle Arafat", "Mohammad Ali"];
    }
    public function index() {
        echo $this->message;
        echo "<br>";

//        echo $this->names;

        print_r($this->names);
        echo "<br>";
        echo "<br>";
        var_dump($this->names);
    }


    /*
        * ARRAY Type by Dimension:
            * One Dimensional Array
            * Two Dimensional Array
            * Multi Dimensional Array
        * ARRAY Type by Nesting:
            * Single Array
            * Nested Array
    */
}