<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums)
    {
        $n = count($nums);
        $result = array_fill(0, $n, 0); // output array
        $left = 0;
        $right = $n - 1;
        $pos = $n - 1;

        while ($left <= $right) {
            if (abs($nums[$left]) > abs($nums[$right])) {
                $result[$pos] = $nums[$left] * $nums[$left];
                $left++;
            } else {
                $result[$pos] = $nums[$right] * $nums[$right];
                $right--;
            }
            $pos--;
        }

        return $result;
    }
}

// Example usage
$nums = [-4, -1, 0, 3, 10];
$solution = new Solution();
print_r($solution->sortedSquares($nums)); 
// Output: [0,1,9,16,100]
