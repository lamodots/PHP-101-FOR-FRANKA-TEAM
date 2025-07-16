<?php 
/***In PHP, we have the following loop types:

    while - loops through a block of code as long as the specified condition is true
    do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    for - loops through a block of code a specified number of times
    foreach - loops through a block of code for each element in an array
 */

 $foods = ['beans', 'egg', 'mango'];
//  echo $foods[0];
//  for($x= 0; $x <=10 ; $x++){
//     echo $x;
//  };

 for($i = 0; $i <=count($foods)-1; $i++){
        echo  " $i- "." $foods[$i]";
 };

 // while loop
 $x =1;
 while ($x <= 10) {
    echo 'hello';
    $x++;
 };

 do {
 echo 'hello';
    $x++;
 }while($x <= 5);


 foreach ($foods as  $value) {
    echo $value;
 }

 // gert index

  foreach ($foods as $index =>  $value) {
    echo "$index - $value <br>";
 }
 // for an associative array
$colors2 = [
    "red"=> 10,
    "green" => 20,
    "blue" => 80
];
 foreach($colors2 as $index => $val  ){
    echo "$index -  $val <br>";
 };

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
  echo  $color3[0]["red"];
    foreach($color3 as  $index => $val){
        echo "$index ===" . json_encode($val);
    };
    foreach($color3 as  $index => $val){
        echo  $val["red"];
    };
    
?>