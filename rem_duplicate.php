<?php

$colors = array(  
  0 => 'Red', 
  1 => 'Green', 
  2 => 'White', 
  3 => 'Black', 
  4 => 'Red', 
  5 => 'Green', 
); 

$numbers = array(   
  0 => 100, 
  1 => 200, 
  2 => 100, 
  3 => -10, 
  4 => -10, 
  5 => 0, 
);
$uniq_colors = array_unique($colors); 
$uniq_numbers = array_unique($numbers); 
print_r($uniq_colors);
print_r($uniq_numbers);
