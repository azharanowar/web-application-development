<?php

namespace App\classes;

class ArrayPractice
{
    public $message, $names, $students;
    public function __construct() {
        $this->message = "Hello from Array Practice File";
        $this->names = ["Azhar Anowar", "Fozle Arafat", "Mohammad Ali"];

        $this->students = [
            0 => [
                "name" => "Azhar Anowar",
                "roll" => 181040,
                "department" => "Computer",
            ],
            1 => [
                "name" => "Fozle Arafat",
                "roll" => 169756,
                "department" => "Computer",
            ],
            2 => [
                "name" => "Mohammad Ali",
                "roll" => 169721,
                "department" => "Computer",
            ],
        ];
    }
    public function index() {
        echo $this->message;
        echo "<br>";

//        echo $this->names;
        print_r($this->names);

        echo "<br>";
        echo "<br>";

        var_dump($this->names);

        echo "<br>";
        echo "<br>";

//        print_r($this->students);

        foreach ($this->students as $student) {
//            echo $student["name"];
//            echo "<br>";

            foreach ($student as $value) {
                echo $value;
                echo "<br>";
            }
        }
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