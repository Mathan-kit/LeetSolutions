class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $a=count($nums1);
        $b=count($nums2);
        $c=$a+$b;
        $arr=[];
        
        $median=0;
        for($i=0;$i<$a;$i++)
        {
            $arr[$i] = $nums1[$i];
        }
        for($j=0;$j<$b;$j++)
        {
            $arr[$a+$j] = $nums2[$j];
        }
        $mid=count($arr)/2;
        sort($arr);
        if(count($arr)%2==1)
            {
                $median = $arr[$mid];
            }
            else
            {
                $median = ((float)($arr[$mid-1]+$arr[$mid])/2);
            }
            return $median;
    }
}