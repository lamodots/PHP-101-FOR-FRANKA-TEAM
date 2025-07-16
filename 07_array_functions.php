<?php 


$cars = array("Volvo", "BMW", "Toyota");

// length of array

echo count($cars);

// search in an array
echo in_array("BMW" ,$cars);

// aDD TO THE ARRAY

$cars[] = 'jEEP';
array_push($cars, "Camera");
print_r(array_chunk($cars, 2));


print_r($cars);

// spread operator

$allCars = [...$cars];

print_r($allCars)

// array_map()

// array_filter()
// array_find()
// array_reduce()









?>