<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $n = count($nums);
        $lastNonZero = 0; // pointer for where the next non-zero element should go

        // Step 1: Move all non-zero elements forward
        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] != 0) {
                $nums[$lastNonZero] = $nums[$i];
                $lastNonZero++;
            }
        }

        // Step 2: Fill the remaining with zeros
        for ($i = $lastNonZero; $i < $n; $i++) {
            $nums[$i] = 0;
        }
    }
}

// Example usage
$nums = [0, 1, 0, 3, 12];
$solution = new Solution();
$solution->moveZeroes($nums);
print_r($nums);  // Output: [1, 3, 12, 0, 0]
