<?php

$data = new DateTime();
echo "<pre>";
echo print_r($data)."<br />";
echo "</pre>";

echo "<pre>";
echo var_dump($data)."<br />";
echo "</pre>";
echo $data->format('d-m__H:i');

$minutes = intval($data->format('i'));

echo $minutes+100;

echo gettype($data);
echo get_class($data);

echo $data::class;






?>