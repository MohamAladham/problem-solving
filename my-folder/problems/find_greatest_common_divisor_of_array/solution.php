<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findGCD($nums) {
        $max = max($nums);
        $min = min($nums);

        for($i=$min; $i>0; $i--){
            if($max%$i === 0 && $min%$i === 0){
                return $i;
            }
        }

        return 1;
    }
}
