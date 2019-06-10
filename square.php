<?php
include_once ('Rectangle.php');

class square extends Rectangle
{
public function __construct($name, $width)
{
    parent::__construct($name,$width,$width, $width);
}
}