<?php

namespace App\classes;

class FullName
{
    public $firstName, $lastName, $fullName;

    public function __construct() {
        $this->firstName = "Azhar";
        $this->lastName = "Anowar";
    }

    public function makeFullName() {
        $this->fullName = $this->firstName . ' ' . $this->lastName;

        return $this->fullName;
    }
}