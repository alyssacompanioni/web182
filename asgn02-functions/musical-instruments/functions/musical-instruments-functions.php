<?php

function applyDiscount($arrInstruments, $discountInt)
{
  $discountPercent = $discountInt / 100;
  for($i=0; $i< count($arrInstruments); $i++) {
    $arrInstruments[$i]['price'] = $arrInstruments[$i]['price'] - ($arrInstruments[$i]['price'] * $discountPercent);
  }
  return $arrInstruments;
}

?>
