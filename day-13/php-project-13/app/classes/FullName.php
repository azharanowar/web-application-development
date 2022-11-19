<?php

namespace App\classes;

class FullName
{
    public $firstName, $lastName, $fullName;

    public function __construct($formData) {
        $this->firstName = $formData['first_name'];
        $this->lastName = $formData['last_name'];
    }

    public function makeFullName() {
        $this->fullName = $this->firstName . ' ' . $this->lastName;

        return $this->fullName;
    }
}