<?php
/* variables must be prefixed with $
    must start with letter or underscore
    cant start with a number
    only alphanumeric characters
    case sensitive $Name different than $name
*/

$name = 'Bennett';
$age = 29;
$has_kids = false;
$cash_on_hand = 20.75;

//echo $cash_on_hand;
//var_dump($has_kids);

//echo $name . 'is ' . $age . ' years old';
echo "${name} is ${age} years old";

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
?>