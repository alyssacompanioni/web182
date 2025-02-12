<!DOCTYPE html>
<!--	
	Author: Alyssa Companioni
	Date: 1.20.25
	File: city-trip.php
	Purpose: Chapter 12 Exercise; Add an associative array to store distances from NYC to 5 cities, using the city names as keys. Add code that receives the city, fuel cost (per gallon) and car mileage submitted by the user, looks up the distance to that city, calculates the fuel cost, and then displays the city, distance, and fuel cost. 
-->

<html>
<head>
	<title>City Trip</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
  $cityDistance = array ('Atlanta' => 880, 'Boston' => 225, 'Chicago' => 788, 'Detroit' => 614, 'Miami' => 1275);
	$mpg = $_POST['mpg'];
  $costPerGallon = $_POST['costPerGallon'];
  $city = $_POST['city'];

  $fuelCost = $cityDistance[$city] / $mpg * $costPerGallon;

  print("<p>It would be ".$cityDistance[$city]." miles to drive to ".$city.", and it would cost $".number_format($fuelCost, 2) ." in fuel.</p>");
	?>

</body>
</html>
