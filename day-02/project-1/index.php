<?php

require_once "vendor/autoload.php";

use App\classes\CountryMessage;

$objCountryMessage = new CountryMessage();
$objCountryMessage->index("Bangladesh");
?>
<br>
<?php
$objCountryMessage->index("USA");