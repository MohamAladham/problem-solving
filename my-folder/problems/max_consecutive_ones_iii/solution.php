<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function longestOnes($nums, $k) {
        $left = 0;
        $right = 0;
        $counts = [0, 0];
        $max = 0;

        while($right<count($nums)){
            $counts[$nums[$right]]++;
            
            if($counts[0] > $k){
                $counts[$nums[$left]]--;
                $left++;
            }
            
            $max = max($max, $right - $left + 1);
            $right++;
        }

        return $max;
    }
}
