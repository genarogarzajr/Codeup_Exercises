<?php

function UniqueRandomNumbersWithinRange($min, $max, $quantity) 
{
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

$numbers = range(1, 6);
shuffle($numbers);

echo "$numbers";



?>




