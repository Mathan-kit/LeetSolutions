class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
         if (empty($prices)) {
        return 0; 
    }

    $minPrice = $prices[0];
    $maxProfit = 0;

    foreach ($prices as $price) {
        if ($price < $minPrice) {
            $minPrice = $price; 
        } else {
            $maxProfit = max($maxProfit, $price - $minPrice); 
        }
    }

    return $maxProfit;
    }
}