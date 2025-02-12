<!DOCTYPE html>
<!--Author: Alyssa Companioni
	Date: 1/28/25
	File:	  give-away.php
	Purpose: Ch13 Exercise

-->

<html>
<head>
	<title>GIVE AWAY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php

	  // add the freeTrip function here
    function freeTrip()
    {
      $trip = rand(1,5);
      if ($trip == 1)
        return "Aruba";
      else if ($trip == 2)
        return "Cairo";
      else if ($trip == 3)
        return "London";
      else if ($trip == 4)
        return "Rome";
      else
        return "Tokyo";
    }
		
		print ("<h1>CONGRATULATIONS!</h1>");

		$destination = freeTrip(); // call the freeTrip function here

		print ("<h1>You have won a free trip to $destination!!!</h1>");


	?>
</body>
</html>
