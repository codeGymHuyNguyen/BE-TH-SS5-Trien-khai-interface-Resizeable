<?php
include_once ('shape.php');

class Rectangle extends shape
{
public $width;
public $height;

public function __construct($name,$height,$width)
{
    parent::__construct($name);
    $this->width = $width;
    $this->height = $height;
}
public function calculateArea(){
   return $this->height * $this->width;
}
public function calculatePerimeter(){
    return ($this->width + $this->height) * 2;
}
}