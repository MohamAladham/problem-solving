<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $hash = [];

        foreach($nums as $i=>$n){
            if(isset($hash[$n]) && abs($hash[$n] - $i) <= $k){
                return true;
            }

            $hash[$n] = $i;
        }

        return false;
    }
}
