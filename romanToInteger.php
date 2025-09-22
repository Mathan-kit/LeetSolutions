<?php
echo "Enter Roman Letter to change to Integer: ";
$s = readline();
$result = 0;
$hash = array(
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000
);
$len = strlen($s);
for ($i = 0; $i < $len - 1; $i++) {
    if ($hash[$s[$i]] < $hash[$s[$i + 1]]) {
        $result -= $hash[$s[$i]];
    } else {
        $result += $hash[$s[$i]];
    }
}
$result += $hash[$s[$len - 1]];
echo "final Result is :" . $result;
