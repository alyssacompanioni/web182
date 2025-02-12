<!DOCTYPE html>
<!--Author: Alyssa Companioni
	Date: 1.20.25
	File:	 my-info.php
	Purpose: Chapter 12 Exercise; Create an associative array with "my info" and access the values necessary to print my address
	
-->

<html>
<head>
	<title>My Address</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php		

  $myInfo = array('firstName' => 'Alyssa', 'lastName' => 'Companioni', 'streetAddress' => '123 Somewhere Over the Rainbow', 'city' => 'Oz', 'state' => 'NOTKansas', 'zip' => 12345, 'email' => 'alyssamcompanioni@students.abtech.edu', 'phoneNumber' => '(123) 456-7890');

  print("<p>".$myInfo['firstName']." ".$myInfo['lastName']."<br>".$myInfo['streetAddress']."<br>".$myInfo['city'].", ".$myInfo['state']. " ".$myInfo['zip']."</p>")
		
	?>
</body>
</html>
