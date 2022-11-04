<?php

require_once "vendor/autoload.php";

use App\classes\ArrayPractice;
use App\classes\Home;


$ArrayPractice = new ArrayPractice();
$ArrayPractice->index();

$Home = new Home();
$Home->index();