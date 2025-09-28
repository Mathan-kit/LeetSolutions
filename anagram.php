<?php
class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        // If lengths are different → can't be anagrams
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        // Count frequency of characters in both strings
        $countS = array_count_values(str_split($s));
        $countT = array_count_values(str_split($t));

        // Compare hash maps
        return $countS == $countT;
    }
}

// Example usage:
$sol = new Solution();
var_dump($sol->isAnagram("anagram", "nagaram")); // true
var_dump($sol->isAnagram("rat", "car"));         // false
