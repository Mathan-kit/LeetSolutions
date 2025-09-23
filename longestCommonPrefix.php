<?php
function longestCommonPrefix($strs) {
    if (count($strs) == 0) return "";

    // Step 1: take first string as prefix
    $prefix = $strs[0];

    // Step 2: compare with other strings
    for ($i = 1; $i < count($strs); $i++) {
        // while current string does not start with prefix
        while (strpos($strs[$i], $prefix) !== 0) {
            // shorten prefix
            $prefix = substr($prefix, 0, strlen($prefix) - 1);
            if ($prefix === "") return "";
        }
    }

    return $prefix;
}

// Example usage
$str = ["Alpha", "Alphone", "Alphonso"];
echo longestCommonPrefix($str);  // Output: "Alph"
