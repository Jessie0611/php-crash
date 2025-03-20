<?php
/*OUTPUT
echo - output strings, numbers, html, etc.
print - works like echo but can only take in a single argument
print_r() - function, single calues and arrays
print_r([1,2,3]);
var_dump() - returns more info like data type, length
var_export() -outputs string representation of a var
VARIABLES*/
$name = 'Jessie';// string
$age = 33; //int
$has_kids = false; //bool
$cash = 50.50; //float
define('HOST', 'localhost'); // creates a constant

echo $name . ' is ' . $age . ' years old.' . '<br>';

//IF (CONDITIONAL){ codeo to be executed if condition is true}
if($age >= 18){
    echo 'You are old enough to vote.' . '<br>';
}else{
    echo 'You are not able to vote.' . '<br>';}
//conditionals: <, >, <-, >=, ==, ===. !=. !==
$post = ['First post' . '<br>'];
// if condition ? <- Then this : <- else this~
echo !empty($post) ? $post [0] : 'No post';

//echo 5+5; will display 10
//define() creates a constant
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'banana', 'strawberry', 'peach');
echo $fruits[0];

$colors = [
    1 => 'red',
    3 => 'blue',
    6 => 'green',
];
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'greeb' => '00f'
];
//LOOPS For loop syntax:  for (initialize; condition ; increment) { code to execute}
for($x = 0; $x <= 10; $x++){
    echo $x;
}
//WHILE  while(condition){ code }
$x = 1;
while($x <= 5){
    echo'<br>' . 'Line ' . $x . '<br>';
    $x++;
}
//foreach ($array as $value) { code }
$array = ['First ',  'Second ', 'Third'];
//for($x = 0; $x < count($array);$x++){ echo $array[$x];}
//the following foreach does the same thing as this for code:
foreach($array as $array){ echo $array; }

//Argument is defining what goes into a function
//Peramater is the information being passed in as an argument.

//htmlspecialchars
//supergloabs - variables built in that are always available in all scopes


//$_GET contains info about variables passed through a URL or form.
//$_POST contains info about variables passed through a form.
//$_COOKIES info via cookies
//$_SESSION info via session
//$_SERVER info via server
//$_ENV info via environment
//$_FILES info via files
//$_REQUEST info via url/form

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>