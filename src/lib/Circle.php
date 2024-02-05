<?php

namespace App\Lib;

use App\Lib\Interfaces\ShapeInterface;

class Circle implements ShapeInterface
{
  public function __construct(private float $radius)
  {
    echo "Created " . __CLASS__ . "<br />";
  }

  public function get_perimeter(): float
  {
    return $this->radius * M_PI * 2;
  }

  public function get_area(): float
  {
    return pow($this->radius, 2) * M_PI;
  }
}
