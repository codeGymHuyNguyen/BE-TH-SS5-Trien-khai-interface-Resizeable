<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('square.php');
include_once ('Rectangle.php');

$circle = new Circle('Circle 01',3);
echo 'Circ learea: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: '. $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01',3,4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01',3,4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$Square = new square('square 01',4, 4, 4);
echo 'Rectangle area: ' . $Square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $Square->calculatePerimeter() . '<br />';
