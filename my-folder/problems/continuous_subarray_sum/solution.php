<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function checkSubarraySum($nums, $k) {
        $mods = [0=>-1];
        $sum = 0;

        for($i=0; $i<count($nums); $i++){
            $sum += $nums[$i];

            if(isset($mods[$sum%$k]) && $i - $mods[$sum%$k]> 1){
                return true;
            }

            if(!isset($mods[$sum%$k])){
                $mods[$sum%$k] = $i;
            }
        }

        return false;
    }
}
