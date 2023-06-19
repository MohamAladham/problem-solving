<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $l = 0;
        $r = count($nums) - 1;

        // 4,5,6,7,0,1,2

        while($l <= $r){
            $m = floor(($r+$l)/2);

            if($nums[$m] === $target){
                return $m;
            }

            if($nums[$m] < $nums[$r]){ // normal sort
                if($nums[$m] < $target && $target <= $nums[$r]){
                    $l = $m + 1;
                }else{
                    $r = $m - 1;
                }
            }else{
                if($target < $nums[$m] && $target >= $nums[$l]){
                    $r = $m - 1;
                }else{
                    $l = $m + 1;
                }
            }

        }
    

        return -1;
    }
}
