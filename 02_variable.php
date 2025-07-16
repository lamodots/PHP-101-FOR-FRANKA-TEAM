<?php 
/*****
 * PHP supports the following data types:

    String
    
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource

 */
// string
$city = "Lagos";
$first_name = "Chichi";
$age = 50;
$isLoggedIn = false;
var_dump($isLoggedIn);
//Concatination in PHP is done with (.)
echo 'Wisdom is' .  $age  . 'year old';
// we can use this
echo "Wisdom is $age year old" ;
// we can do templat literal

echo "Wisdom is ${age} year old "; // depricated
echo $city;
echo $first_name;
echo $age;
echo $isLoggedIn; // boolean value gives you 1 for true and 0 for false

$x = '30';
$y= '60';
var_dump($x);
echo $x - $y;
echo 8 - 1;
echo 8%3;

// Constants. We use the to create variables you know will not chanage

define('HOST', 'localhost');
define('PASSWORD', '2626267');
// Access the constants
echo HOST ;
echo PASSWORD

?>