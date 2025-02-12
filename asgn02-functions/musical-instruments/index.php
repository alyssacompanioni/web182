<?php
include("functions/musical-instruments-functions.php");

$arrInstruments = array(['instrument' => 'Piano', 'price' => 3000], ['instrument' => 'Guitar', 'price' => 800], ['instrument' => 'Violin', 'price' => 1200]);

$discountedInstruments = applyDiscount($arrInstruments, 10);

echo "Prices before applying discount: <br>";
echo print_r($arrInstruments);

echo "<br>Prices after applying discount: <br>";
echo print_r($discountedInstruments);
?>
