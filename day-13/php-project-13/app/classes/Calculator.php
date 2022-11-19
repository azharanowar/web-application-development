<?php

namespace App\classes;

class Calculator
{
    public $firstNumber, $lastNumber, $operation, $result;

    public function __construct($calculatorFormData) {
        $this->firstNumber = (int) $calculatorFormData['first_number'];
        $this->lastNumber = (int) $calculatorFormData['last_number'];
        $this->operation = $calculatorFormData['operation_btn'];
    }

    public function getResult() {
        switch ($this->operation) {
            case '+':
                $this->result = $this->firstNumber + $this->lastNumber;
                break;
            case '-':
                $this->result = $this->firstNumber - $this->lastNumber;
                break;
            case '*':
                $this->result = $this->firstNumber * $this->lastNumber;
                break;
            case '/':
                $this->result = $this->firstNumber / $this->lastNumber;
                break;
            case '%':
                $this->result = $this->firstNumber % $this->lastNumber;
                break;
        }

        return $this->result;
    }
}