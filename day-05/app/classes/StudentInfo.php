<?php

namespace App\classes;

class StudentInfo
{
    public $students = [];

    public function __construct() {
        $this->students = [
            "name"  => "Azhar Anowar",
            "roll"  => 181040,
            "email" => "azharanowar@gmail.com",
            "phone" => "01875967162"
        ];
    }
}