<?php


$input = [
    ['parent_id' => 1, 'child_id' => 1],
    ['parent_id' => 1, 'child_id' => 2],
    ['parent_id' => 2, 'child_id' => 3]
];

$output = [];
//output has to be like that:

// $output = [
//  1 => [1,2],
//   2 => [3]
// ];

//foreach ($input as $key => $value) {
//    array_push($output, $key);
//
//    foreach ($value as $ValuesArraySingleElement) {
//        array_push($output[$key], $ValuesArraySingleElement);
//
//    }
//
//}
$i = 1;

foreach ($input as $key => $value) {
    $output+= [$key => array_values($value)];
    $i++;
}

var_dump($output);
