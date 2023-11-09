<?php

$string = 'Hello World';

//lenght of string
strlen($string);
//first occurence of letter o
strpos($string, 'o');
//last occurence of o
strrpos($string, 'o');
//reverse a string
strrev($string);
//all to lowercase
strtolower($string);
//all to upper
strtoupper($string);
//uppercase first letter of each word
ucwords($string);
//string replace
str_replace('World', 'Everyone', $string);
//portion of string
substr($string, 0,5);
//starts with
if(str_starts_with($string, 'Hello')){
    echo 'YES';
}
//ends with
if(str_ends_with($string, 'ld')){
    echo 'YES';
}