
<?php

    function numJewelsInStones($jewels, $stones)
    {
        $total = 0;
        $chars = str_split($stones);
        $count = array_count_values($chars);

        foreach ($count as $char => $occurrences) {
            if (strpos($jewels, $char) !== false) {
                $total += $occurrences;
            }
        }
        return $total;
    }
// Example usage:
echo numJewelsInStones("aA", "aAAbbbb"); // Output: 3
echo "\n";
echo numJewelsInStones("z", "ZZ"); // Output: 0
?>
