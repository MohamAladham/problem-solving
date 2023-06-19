<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNonDuplicate($nums) {
        $l = 0;
        $r = count($nums) - 1;

        // [1,1,2,3,3,4,4,8,8]
        //  0,1,2,3,4,5,6,7,8

        while ($l <= $r) {
            $m = floor(($l + $r) / 2);

            // in the middle of the array
            if((isset($nums[$m-1]) && isset($nums[$m+1]) && $nums[$m-1] != $nums[$m] && $nums[$m+1] != $nums[$m]))
            {
                return $nums[$m];
            }

            // last element
            if(!isset($nums[$m+1]) && $nums[$m] != $nums[$m-1]){
                return $nums[$m];
            }

            // first element
            if(!isset($nums[$m-1]) && $nums[$m] != $nums[$m+1]){
                return $nums[$m];
            }

            $leftSize = isset($nums[$m-1]) && $nums[$m-1] == $nums[$m] ? $m - 1 : $m;

            // is odd? has unque number.
            if($leftSize%2 != 0){
                $r = $m - 1;
            }else{
                $l = $m + 1;
            }
        }
    }
}
