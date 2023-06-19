<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
     function maxSubArray($nums) {
        $max = PHP_INT_MIN;
        $currSum =0;
        foreach($nums as $num){
            if($currSum < 0) // if we have negative sum, start over and make currSum=0
                $currSum = 0;
            $currSum += $num;// else keep adding
            $max = max($max, $currSum);   
        }
        return $max;
    }
}
