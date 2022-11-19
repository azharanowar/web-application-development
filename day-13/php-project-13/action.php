<?php

require_once "vendor/autoload.php";

use App\classes\FullName;

use App\classes\Home;

if (isset($_GET['page'])) {
    if ($_GET['page'] === 'home') {
        include "pages/home.php";
    }
} else if (isset($_POST['full_name_btn'])) {

    $fullName = new FullName($_POST);
    $fullNameResult = $fullName->makeFullName();

    include "pages/home.php";

}