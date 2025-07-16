<?php 
// simple array
$numbers = [1,2,3,0,44];
print_r($numbers);

$fruites = array("MANGO", "oRANGE");

// length of array

echo count($fruites);
var_dump($numbers);

echo $fruites[0];

// Assocualtive array . Like object

$colors = [
    1 => 'red',
    2 => 'green'
];

echo $colors[1];

$colors2 = [
    "red"=> 10,
    "green" => 20,
    "blue" => 80
];

echo $colors2['blue'] ;

// MULTI DIMETION ARRAYS. ARAYS INSIDE ARRAY LIKE OBJECT ARRAY IN jAVASCRIPT

$color3 = [
     [
    "red"=> 10,
    "green" => 20,
    "blue" => 80
     ],
     [
    "red"=> 100,
    "green" => 200,
    "blue" => 800
     ],
     [
    "red"=> 109,
    "green" => 209,
    "blue" => 809
     ],
    ];

// we can trun this into json
$jsonValue = json_encode($color3);
echo $jsonValue;
var_dump($jsonValue)
?>