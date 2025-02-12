<!--Author: Alyssa Companioni
	  Date: 2/4/25
		File:	game-character.php
		Purpose: OOP Exercise
-->

<?php

  include("inc-game-character-object.php");

  $plantMagician = new GameCharacter();
  $plantMagician->setPlayerName("MomThePlantMagician");
  $plantMagician->setScore("75");

  $fixItWizard = new GameCharacter();
  $fixItWizard->setPlayerName("DadTheFixItWizard");
  $fixItWizard->setScore("100");

  if($plantMagician->getScore() > $fixItWizard->getScore())
  {
    print("<p>".$plantMagician->getPlayerName()." WINS against ".$fixItWizard->getPlayerName().
  " with a score of ".$plantMagician->getScore() ." versus ".$fixItWizard->getScore().".</p>");
  }
  else if ($plantMagician->getScore() == $fixItWizard->getScore())
  {
    print("<p>".$plantMagician->getPlayerName()." ties with ".$fixItWizard->getPlayerName().".</p>");
  }
  else{
    print("<p>".$fixItWizard->getPlayerName()." WINS against ".$plantMagician->getPlayerName().
  " with a score of ".$fixItWizard->getScore() ." versus ".$plantMagician->getScore().".</p>");
  }

?>
