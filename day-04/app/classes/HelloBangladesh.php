<?php


namespace App\classes;


class HelloBangladesh
{
    public $message, $x, $y, $z, $i;
    public function __construct() {
        $this->message = "Hello Bangladesh!!!";
    }
    public function index() {
        echo $this->message;
        echo "<br>";


        /*
            * PHP Statements:
                * Single Line Statement ( $this->x = 20; )
                * Conditional Statement ( IF, IF ELSE, IF ELSE IF, SWITCH )
                * Repeated Statement ( FOR, WHILE, DO WHILE, FOREACH )
         */


//      1. Single Line Statement:
            // $this->x = 10;
            // $this->y = 20;
            // $this->z = 10;
            // echo $this->z;



        $this->x = 20;
        $this->y = 30;
        $this->z = 50;

//        Conditional Statements ( IF, IF ELSE, IF ELSE IF, SWITCH )

//        if ($this->x < $this->y) {
//            $this->z = $this->x + $this->y;
//            echo $this->z;
//        }


//        if ($this->x > $this->y) {
//            $this->z = $this->x + $this->y;
//            echo $this->z;
//        } else {
//            echo "Condition is false!!!";
//        }


//        if ($this->x > $this->y && $this->x > $this->z) {
//            echo $this->x;
//        } else if ($this->y > $this->x && $this->y > $this->z) {
//            echo $this->y;
//        } else {
//            echo $this->z;
//        }


//        switch ($this->x) {
//            case 1 :
//                echo "1";
//                break;
//            case 2 :
//                echo "2";
//                break;
//            case 5 :
//                echo "5";
//                break;
//            case 10 :
//                echo "10";
//                break;
//            case 15 :
//                echo "15";
//                break;
//            case 20 :
//                echo "20";
//                break;
//            default :
//                echo "Default";
//                break;
//
//        }


//        Repeated Statements ( FOR, WHILE, DO WHILE, FOREACH )

        for ($this->i = 0; $this->i <= 100; $this->i++) {
            echo "Hello World!!!";
            echo "<br>";
        }

    }
}