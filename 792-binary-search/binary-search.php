class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
       $left =0;
    $right = count($nums)-1;
    while($left<=$right)
    {
        $mid = intval(($left+$right)/2);
        
        if($nums[$mid] == $target)
        {
            return $mid;
        }elseif($nums[$mid]<$target)
        {
            $left = $mid +1;
        }else{
            $right = $mid-1;
        }
    }
    return -1;
}
}