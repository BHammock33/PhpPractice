<?php

$fruits = ['apple', 'orange', 'pear'];

//echo count($fruits);

//boolean find in array
//var_dump(in_array('apple', $fruits));

//adds to array
//$fruits[] = 'grape';

//adds to end
//array_push($fruits, 'blueberry');

//adss to front of array
//array_unshift($fruits, 'pineapple');

//remove from array
//removes from end
//array_pop($fruits);

//removes from begining
//array_shift($fruits);

//removes from specific index and removes index so now [0,1,3,4]
//unset($fruits[2]);

//break into chunks
//$chunked_array = array_chunk($fruits, 2);
//breaks into sperate arrays of 2 values

//concat arrays

$ar1 = [1, 2, 3];
$ar2 = [4,5,6];

//these are equivalent
$ar3 = array_merge($ar1, $ar2);
$ar4 = [...$ar1, ...$ar2];


$a = ['Green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
//array combine sets the first array as keys to the second array values

$keys = array_keys($c);
//gives just the keys of the array into a new array

$flipped = array_flip($c);
//flips the keys and values (keys become values and vice versa)

$numbers = range(1,20);
//creates and array of numbers from 1-20

$newNumbers = array_map(function($number){
    return "Number: $number";
}, $numbers);


$lessThanTen = array_filter($numbers, fn($number) => $number <= 10);

$sum = array_reduce($numbers, fn($carry, $number) => 
$carry + $number);
//var_dump($sum);


?>