<?php

require_once "vendor/autoload.php";

use app\classes\CountryMessage;

$objCountryMessage = new CountryMessage();
$objCountryMessage->index("Bangladesh");
?>
<br>
<?php
$objCountryMessage->index("USA");