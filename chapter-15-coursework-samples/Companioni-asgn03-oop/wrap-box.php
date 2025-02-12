<!--Author: Alyssa Companioni
	  Date: 2/4/25
		File:	wrap-box.php
		Purpose: OOP Exercise
-->

<?php
  include("inc-box-object.php");

  $giftBox = new Box();

  $giftBox->setX($_POST['length']);
  $giftBox->setY($_POST['height']);
  $giftBox->setZ($_POST['width']);

  print("<p>Congratulations on finding a gift box!</p>");
  print("<p>A gift box with the dimensions of ".$giftBox->getX()." feet by ".$giftBox->getY()." feet by ".$giftBox->getZ()." feet would require ".$giftBox->calculateSA()." square feet of wrapping paper.</p>")

?>
