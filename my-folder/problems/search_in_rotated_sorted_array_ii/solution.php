<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Boolean
     */
    function search($nums, $target) {
        //[2,5,6,7,8,9,0,0,1,2] // 0
        //         ^


        $l = 0;
        $r = count($nums) - 1;

        while($l<=$r){

            while( $nums[$l] === $nums[$l+1]){
                $l++;
            }

            while( $nums[$r] === $nums[$r-1]){
                $r--;
            }

            $m = floor(($l+$r)/2);

            if($nums[$m] === $target || $nums[$l] === $target || $nums[$r] === $target){
                return true;
            }

                 if($nums[$m] === $target || $nums[$r] === $target || $nums[$l] === $target){
                return true;
            }

            if ($nums[$l] <= $nums[$m]) {
                if ($nums[$m] >= $target && $nums[$l] <= $target) {
                    $r = $m - 1;
                } else {
                    $l = $m + 1;
                }
            } else {
                if ($target >= $nums[$m] && $target <= $nums[$r]) {
                    $l = $m + 1;
                } else {
                    $r = $m - 1;
                }
            }
        }


        return false;
    }
}
