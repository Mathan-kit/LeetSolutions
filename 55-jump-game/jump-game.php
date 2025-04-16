<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $lastReachable = count($nums) - 1; // Start with the last index

        // Traverse the array backward
        for ($i = count($nums) - 2; $i >= 0; $i--) {
            if ($i + $nums[$i] >= $lastReachable) {
                $lastReachable = $i; // Update the last reachable index
            }
        }

        // Check if the first index can reach the last reachable index
        return $lastReachable === 0;
    }
}

// Example usage
$solution = new Solution();
$nums = [2, 3, 1, 1, 4];
echo $solution->canJump($nums) ? 'true' : 'false'; // Output: true
?>
