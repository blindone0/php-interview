<?php

function display($var) {
    foreach($GLOBALS as $demo => $value) {
        if ($value === $var) {
            return $demo;
        }
    }
    return false;
}

$input = [
    ['parent_id' => 1, 'child_id' => 1],
    ['parent_id' => 1, 'child_id' => 2],
    ['parent_id' => 2, 'child_id' => 3]
];

$output = [];
//output has to be like that, not finished yet:

// $output = [
//  1 => [1,2],
//   2 => [3]
// ];

$i = 1;

foreach ($input as $key => $value) {
    $output+= [$i => array_values($value)];
    $i++;
}
print "$".display($output)." = [ \n";
foreach ($output as $key => $value) {
    $outString="$key => [";
    $length = count($value);
    $j=0;
    foreach($value as $v) {
        $j++;
        print "\t";
        if($length == $j) {
            $outString=$outString.$v;
        } else {
            $outString=$outString.$v.",";
        }
    }
    $outString = $outString."]";
    echo $outString."\n";
}
print "]; \n";

//var_dump($output);
