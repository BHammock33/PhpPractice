<?php
/*
for($x = 0; $x <= 10; $x++){
    echo 'Number ' . $x . '<br>';
};
*/

/*
$x =1;
while($x <= 15){
    echo 'Number ' . $x . '<br>';
    $x++;
}
*/

/*
$x = 10 ;

do {
    echo 'Number ' . $x . '<br>';
    $x++;
} while($x <= 5);
*/

$posts = ['First', 'Second', 'Third'];
/*
for( $x = 0; $x < count($posts); $x++){
    echo $posts[$x];
    echo '<br>';
}
*/
/*
foreach($posts as $post){
    echo $post;
}
*/
/*
foreach($posts as $index => $post){
    echo $index . ' - ' . $post . '<br>';
}
*/
$person = [
    'first_name' => 'Brad',
    'email' => 'gmail',
    'age' => 30
];
foreach($person as $key => $value){
    echo "$key - $value<br>";
}
?>