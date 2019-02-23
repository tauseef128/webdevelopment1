<?php 
$fruits = array("Apple","Banana","Graps","Mango", "WaterMillon");
// array_push($fruits, "Mango");
// array_pop($fruits);
// $chunked_array = array_chunk($fruits, 3);
// print_r($chunked_array);
// array_splice(1,0,"Orange");

array_splice($fruits, 1 , 0, array("Pine Apple","kiwi"));
print_r($fruits);

// print_r(array_slice($fruits, 2));
echo "<br>";
// print_r($fruits);
// foreach ($chunked_array as $key => $value) {
// 	print_r( $value);
// 	echo "<br>";
// }
?>

