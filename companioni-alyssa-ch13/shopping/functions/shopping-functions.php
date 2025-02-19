<?php

  function calculateSubtotal($arrItemPrices) 
  {
    $subtotal = 0;
    for($i=0; $i < count($arrItemPrices); $i++) {
      $subtotal += $arrItemPrices[$i];
    }
    return $subtotal;
  }

  function applyDiscount($subtotal, $discountPercent)
  {
    if ($discountPercent == 0)
      return 0;
    else
      return $subtotal * $discountPercent;
  }

  function calculateTotal($arrItemPrices, $discountPercent)
  {
    $subtotal = calculateSubtotal($arrItemPrices);
    $discount = applyDiscount($subtotal, $discountPercent);
    $finalTotal = $subtotal - $discount;
    return $finalTotal;
  }
?>
