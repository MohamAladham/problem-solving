<?php


class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer[] $nums3
     * @param Integer[] $nums4
     * @return Integer
     */
    function fourSumCount($nums1, $nums2, $nums3, $nums4) {
        $hash = [];
        $count = 0;

        foreach($nums1 as $n1){
            foreach($nums2 as $n2){
                $hash[$n1+$n2] = isset($hash[$n1+$n2]) ? ++$hash[$n1+$n2] : 1;
            }
        }

        foreach($nums3 as $n3){
            foreach($nums4 as $n4){
                if(isset($hash[(-1)*($n3+$n4)])){
                    $count += $hash[(-1)*($n3+$n4)];
                }
            }
        }

        return $count;
    }
}
