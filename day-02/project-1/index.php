<?php

require_once "app/classes/CountryMessage.php";

use App\classes\CountryMessage;

$objCountryMessage = new CountryMessage();
$objCountryMessage->index("Bangladesh");
?>
<br>
<?php
$objCountryMessage->index("USA");