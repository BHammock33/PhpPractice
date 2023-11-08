<?php

$numbers = [1,2,3,4];
$fruits = array('apple', 'orange', 'pear');

//print_r($numbers);
//var_dump($fruits);

//echo $fruits[1];

//associateive array

$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

//echo $colors[6];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

//echo $hex['green'];

$person = [
    'first_name' => 'Brad',
    'email' => 'gmail',
    'age' => 30
];
//echo $person['first_name'];

$people = [
    [
        'first_name' => 'Brad',
        'email' => 'gmail',
        'age' => 30
    ],
    [
        'first_name' => 'Kyle',
        'email' => 'hotmail',
        'age' => 33
    ],
    [
        'first_name' => 'Mike',
        'email' => 'none',
        'age' => 50
    ]
];
//echo $people[1]['email'];
var_dump(json_encode($people));
?>