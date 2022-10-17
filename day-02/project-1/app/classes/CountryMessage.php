<?php

namespace App\classes;

class CountryMessage
{
    public $message;
    public function __construct() {
        $this->message = "Hello from the country of ";
    }
    public function index($countryName) {
        echo $this->message . $countryName;
    }
}