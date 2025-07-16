<?php

$x = 10;

function register_user(){
    // function local scope
    $user = "Mezie"; // you can access this outside function

    // to use $x inside the fucntion you can make gobal
    global $x;
    echo "user registered $x";
};
register_user();

// function paramters and arguments
function sum($num1, $num2){
 echo $num1 + $num2;
};

sum(1, 2);
// function with empty  arguments
function sum2($num1 = 0, $num2 = 0){
 echo $num1 + $num2;
};

sum2();

// annoymous function

$fight = function(){
echo 'Beans';
};

// return function
$fight3 = function($num1, $num2){
return $num1 - $num2;
};

// arrow functions
$fight5 = fn($num1, $num2) => $num1 - $num2;

echo $fight5(2, 3)


?>