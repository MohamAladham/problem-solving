<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $hash = [];

        foreach($nums as $n){
            if(isset($hash[$n])){
                return true;
            }

            $hash[$n] = true;
        }

        return false;
    }
}
