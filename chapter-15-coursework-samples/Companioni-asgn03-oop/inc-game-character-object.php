<?php
class GameCharacter
{
  private $playerName;
  private $score;

  public function getPlayerName()
  {
    return $this->playerName;
  }

  public function setPlayerName($name)
  {
    $this->playerName = $name;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setScore($points)
  {
    $this->score = $points;
  }
}
?>
