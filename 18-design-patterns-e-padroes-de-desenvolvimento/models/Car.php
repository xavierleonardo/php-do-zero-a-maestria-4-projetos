<?php
class Car
{
  private $id;
  private $brand;
  private $km;
  private $color;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    return $this->id = $id;
  }

  public function getbrand()
  {
    return $this->brand;
  }

  public function setbrand($brand)
  {
    return $this->brand = $brand;
  }

  public function getkm()
  {
    return $this->km;
  }

  public function setkm($km)
  {
    return $this->km = $km;
  }

  public function getcolor()
  {
    return $this->color;
  }

  public function setcolor($color)
  {
    return $this->color = $color;
  }
}

