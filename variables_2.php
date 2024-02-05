<?php
class Coat{
    public $price;
}
$first = new Coat();
$first ->price = 15000;

$second = new Coat();

$third = $first;
$third->price = 25000;


$value_salary = 25e15;

echo var_dump($value_salary, true);
$ans = var_export($third);

echo $ans;

$arr = [
    'a'=>'apple',
    'b'=>'banana',
    'c'=> ['x', 'y', ['bmw', 'audi', 'kia']]
    ];
  
  


?>