<?php
class Solution
{

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n)
    {
        $seen = []; // hash set to store visited numbers

        while ($n != 1 && !isset($seen[$n])) {
            $seen[$n] = true; // mark number as seen
            $n = $this->getNext($n); // get sum of squares of digits
        }

        return $n == 1;
    }

    // helper function: calculate sum of squares of digits
    private function getNext($n)
    {
        $sum = 0;
        while ($n > 0) {
            $digit = $n % 10;  // last digit
            $sum += $digit * $digit;
            $n = intdiv($n, 10); // remove last digit
        }
        return $sum;
    }
}

// Example test
$sol = new Solution();
echo $sol->isHappy(9) ? "true" : "false"; // should print true
