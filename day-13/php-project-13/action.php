<?php

require_once "vendor/autoload.php";

use App\classes\FullName;
use App\classes\Calculator;

if (isset($_GET['page'])) {
    if ($_GET['page'] === 'home') {

        include "pages/home.php";

    } else if ($_GET['page'] === 'calculator') {

        include "pages/calculator.php";

    }
} else if (isset($_POST['full_name_btn'])) {

    $fullName = new FullName($_POST);
    $fullNameResult = $fullName->makeFullName();

    include "pages/home.php";

} else if (isset($_POST['operation_btn'])) {
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();
    include "pages/calculator.php";

}
