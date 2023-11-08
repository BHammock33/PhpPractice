<?php
/*
$t = date("H");
echo $t;
if($t < 12 ){
    echo "Good morning";
} elseif($t < 17) {
    echo "good afternoon";
} else {
    echo "good night";
};
*/

$posts = ['First Post'];
//$firstPost = !empty($posts) ? $posts[0] : 'No posts';
//$firstPost = $posts[0] ?? null;
//echo $firstPost;

$favcolor = 'yellow';

switch($favcolor) {
    case 'red' : 
        echo 'Your favorite color is red';
        break;
    case 'blue' :
        echo 'Your favorite color is blue';
        break;
    case 'green' :
        echo 'Your favorite color is green';
        break;
    default :
        echo 'Your favorite color is not red, green, or blue';
}
?>