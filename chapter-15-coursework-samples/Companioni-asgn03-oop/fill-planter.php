<!--Author: Alyssa Companioni
	  Date: 2/4/25
		File:	fill-planter.php
		Purpose: OOP Exercise
-->

<?php
  include("inc-box-object.php");

  $planterBox = new Box();

  $planterBox->setX($_POST['length']);
  $planterBox->setY($_POST['height']);
  $planterBox->setZ($_POST['width']);

  print("<p>Congratulations on your new planter box! Your plant will be very happy :)</p>");
  print("<p>A planter box with the dimensions of ".$planterBox->getX()." feet by ".$planterBox->getY()." feet by ".$planterBox->getZ()." feet would require ".$planterBox->calculateVol()." cubic feet of soil.</p>")

?>
