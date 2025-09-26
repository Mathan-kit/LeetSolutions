<?php
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $freq = [];

        // Step 1: count frequency of each char
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            if (!isset($freq[$char])) {
                $freq[$char] = 0;
            }
            $freq[$char]++;
            echo $freq[$char];
        }


        // Step 2: find first index with count = 1
        for ($i = 0; $i < strlen($s); $i++) {
            if ($freq[$s[$i]] === 1) {
                return $i;
            }
        }

        return -1; // if no unique char
    }
}

// Example run
$sol = new Solution();
echo $sol->firstUniqChar("loveleetcode"); // Output: 2
echo "\n";
echo $sol->firstUniqChar("aabb"); // Output: -1
?>
