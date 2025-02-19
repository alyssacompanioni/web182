<?php
  print("<h1>Shopping Function Exercise</h1>");

  include("functions/shopping-functions.php");
  
  $arrItemPrices1 = array(10.00, 20.00, 30.00);
  $arrItemPrices2 = array(50.00, 25.00);
  $arrItemPrices3 = array(15.00, 5.00, 10.00);

  $subtotal1 = calculateSubtotal($arrItemPrices1);
  $subtotal2 = calculateSubtotal($arrItemPrices2);
  $subtotal3 = calculateSubtotal($arrItemPrices3);

  // $discount1 = applyDiscount($subtotal1, .10);
  // $discount2 = applyDiscount($subtotal2, 0);
  // $discount3 = applyDiscount($subtotal3, .20);

  $finalTotal1 = calculateTotal($arrItemPrices1, .10);
  $finalTotal2 = calculateTotal($arrItemPrices2, 0);
  $finalTotal3 = calculateTotal($arrItemPrices3, .20);

  // print("<h2>Shopping Cart 1</h2>");
  // print("<p>The subtotal of shopping cart 1 before a discount is $$subtotal1.</p>");
  // print("<p>A discount of 10% saves you $$discount1.</p>");

  // print("<h2>Shopping Cart 2</h2>");
  // print("<p>The subtotal of shopping cart 2 before a discount is $$subtotal2.</p>");
  // print("<p>A discount of 0% saves you $$discount2.</p>");

  // print("<h2>Shopping Cart 3</h2>");
  // print("<p>The subtotal of shopping cart 3 before a discount is $$subtotal3.</p>");
  // print("<p>A discount of 20% saves you $$discount3.</p>");

  print("<h2>Shopping Cart 1</h2>");
  print("<p>Subtotal: $".number_format($subtotal1, 2)."</p>");
  print("<p>Discount Applied: 10%</p>");
  print("<p>Final Total: $".number_format($finalTotal1, 2)."</p>");

  print("<h2>Shopping Cart 2</h2>");
  print("<p>Subtotal: $".number_format($subtotal2, 2)."</p>");
  print("<p>Discount Applied: 0%</p>");
  print("<p>Final Total: $".number_format($finalTotal2, 2)."</p>");

  print("<h2>Shopping Cart 3</h2>");
  print("<p>Subtotal: $".number_format($subtotal3, 2)."</p>");
  print("<p>Discount Applied: 20%</p>");
  print("<p>Final Total: $".number_format($finalTotal3, 2)."</p>");
?>



