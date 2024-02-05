<?php

class PrivatePoint
{
    public int $height = 0;
    public readonly int $width;
    public static $pi = 3.14253748524;


    public function __construct()
    {
       $this->width = 500; 
    }
}


$p1 = new PrivatePoint;

$p1->height=19990.00;


echo gettype($p1->height);
echo $p1->height;

echo $p1->width;

echo '<pre>';
print_r($p1);
echo '</pre>';

echo PrivatePoint::$pi;