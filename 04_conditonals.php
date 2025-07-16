<?php

// conditionals are control structures
/****
 * Operator 	Name 	Example 	Result 	Try it
== 	Equal 	$x == $y 	Returns true if $x is equal to $y 	
=== 	Identical 	$x === $y 	Returns true if $x is equal to $y, and they are of the same type 	
!= 	Not equal 	$x != $y 	Returns true if $x is not equal to $y 	
<> 	Not equal 	$x <> $y 	Returns true if $x is not equal to $y 	
!== 	Not identical 	$x !== $y 	Returns true if $x is not equal to $y, or they are not of the same type 	
> 	Greater than 	$x > $y 	Returns true if $x is greater than $y 	
< 	Less than 	$x < $y 	Returns true if $x is less than $y 	
>= 	Greater than or equal to 	$x >= $y 	Returns true if $x is greater than or equal to $y 	
<= 	Less than or equal to 	$x <= $y 	Returns true if $x is less than or equal to $y 	
<=> 	Spaceship 	$x <=> $y 	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
 */


 echo 10==10 ;// true (1)
 echo 10 < 2; // return nothing for false

 echo 10 != 2;

 $course = "php";
 // if statement
 if($course == "php"){
    echo "Welcome to class";
 };

 // if else
 if($course == 'php'){
     echo "Welcome to class";
 }else {
     echo "Bye";
 };
// ternary 
echo $course == "php"? "Welcome to class again" : 'Buy';
 // if else if

 if($course === "php"){
echo "Welcome to class";
 }else if($course == 'php and html'){
    echo "Welcome to class fullstack";
 }else {
    echo "Bye";
 };

 if(true){
    echo 'Jump';
 }

 $post = ["Chicken"];

 echo empty($post);
 echo empty($course);

 $mycolor = 'red';
 // switches
 switch($mycolor){
    case 'red';
        echo 'm y coor';
        break;
    default ;
        echo "okay";
 }

 ?>