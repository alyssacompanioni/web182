<?php
class Box
{
  private $x;
  private $y;
  private $z;


  public function setX($length)
  {
    $this->x = $length;
  }

  public function getX()
  {
    return $this->x;
  }

  public function setY($height)
  {
    $this->y = $height;
  }

  public function getY()
  {
    return $this->y;
  }

  public function setZ($width)
  {
    $this->z = $width;
  }

  public function getZ()
  {
    return $this->z;
  }

  public function calculateVol()
  {
    return $this->x * $this->y * $this->z;
  }

  public function calculateSA()
  {
    return 2 * $this->x * $this->y + 2 * $this->x * $this->z + 2 * $this->y * $this->z;
  }

}
?>
