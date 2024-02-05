<?php
require("vendor/autoload.php");

$circle = new \App\Lib\Circle(7);

echo "The perimeter is: ";
echo $circle->get_perimeter() . "<br/>";
echo "The area is: ";
echo $circle->get_area();

echo get_year();

Utils::show_hello();
