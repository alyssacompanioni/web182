<!DOCTYPE html>
<!--Author: Alyssa Companioni
	Date: 1/13/25
	File:	  orders.php
	Purpose: To allow a user to obtain a report concerning orders for blueberry bushes.
	
-->

<html>
<head>
	<title>BLUEBERRY ORDERS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		
		print ("<h1>BLUEBERRY ORDERS</h1>");
		print ("<table>");
		print ("<tr><th>Order #</th><th>Quantity</th></tr>");
		
    $orders = array (2, 17, 4, 6, 1, 3, 1, 15, 1, 6);
    for($i=0; $i < sizeof($orders); $i++)
    {
      print ("<tr><td>" .$i+1 ."</td><td>" .$orders[$i] ."</td></tr>");
    }
		
		print ("</table>");
		$totalBushes = 0;
    $bigOrders = 0;
    for($i=0; $i < sizeof($orders); $i++)
    {
      $totalBushes += $orders[$i];
      if ($orders[$i] > 1)
      {
        $bigOrders += 1;
      }
    }


		print ("<p>TOTAL NUMBER OF BUSHES ORDERED: $totalBushes.</p>");
		print ("<p>TOTAL NUMBER OF ORDERS: ".sizeof($orders).".</p>");
    print ("<p>TOTAL NUMBER OF ORDERS WITH MORE THAN 1 BUSH: ".$bigOrders.".</p>");		
	?>
</body>
</html>
