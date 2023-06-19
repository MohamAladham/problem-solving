<?php


class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $hash = [];
        $arr = [];

        foreach($nums1 as $n){
            $hash[$n] = 1;
        }

        foreach($nums2 as $n){
            if(isset($hash[$n]) && $hash[$n] === 1){
                $hash[$n] = ++$hash[$n];
                $arr[] = $n;
            }
        }


        return $arr;
    }
}
