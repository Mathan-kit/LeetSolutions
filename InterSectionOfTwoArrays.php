<?php

$a = [1, 2, 2, 1];
$b = [2, 2];

$arr1 = array_unique($a);
$arr2 = array_unique($b);

$result = [];

foreach ($arr2 as $value) {
    if (in_array($value, $arr1)) {
        $result[] = $value;
    }
}

print_r($result); // Output: [2]
