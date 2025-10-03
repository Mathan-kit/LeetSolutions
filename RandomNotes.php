<?php
class Solution {
    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $magCount = array_count_values(str_split($magazine));

        for ($i = 0; $i < strlen($ransomNote); $i++) {
            $char = $ransomNote[$i];
            if (empty($magCount[$char])) {
                return false; // not enough chars
            }
            $magCount[$char]--; // use one
        }

        return true;
    }
}

// Example usage
$solution = new Solution();
var_dump($solution->canConstruct("a", "b"));    // false
var_dump($solution->canConstruct("aa", "ab"));  // false
var_dump($solution->canConstruct("aa", "aab")); // true
