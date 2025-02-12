<!DOCTYPE html>
<!--Author: Alyssa Companioni
	Date: 1/13/25
	File:	  parking.php
	Purpose:To allow a parking attendant to select a parking space number from a drop down list and display the associated license plate number for the car that has the permit to that space. 

-->

<html>
<head>
	<title>PARKING PERMIT CHECKING SYSTEM</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$parkingPermits = array("LYD EW25", "XYZ 1234", "BDA 3AGT", "HJA 5TY2", "AAA B24W",
		"NBD EW25", "XYZ 67RT", "KL6 TY6J", "KEA H3JK", "AND 3G4W",
		"HJS EF19", "XYZ KL2W", "LKG KL1T", "R25 3KLJ", "BNA UW4W",
		"HJS JG34", "JKS 98RT", "KL3 3AGT", "KL2 5TY2", "JK2 LK1D");

		$permitNumber = $_POST['permitNumber'];

		print ("<h1>PARKING PERMIT CHECKING SYSTEM</h1>");
		// complete the print statement to show the correct license number based on 
		// the permit number (0 - 19) that the user submitted
		
		print ("<p>The license plate number for parking space " .$permitNumber ." is " .$parkingPermits[$permitNumber] ."</p>");
	?>
</body>
</html>
