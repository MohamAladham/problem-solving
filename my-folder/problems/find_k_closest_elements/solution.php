<?php


class Solution {

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @param Integer $x
     * @return Integer[]
     */
    function findClosestElements($arr, $k, $x) {
        $left = 0;
        $right = count($arr) - 1;

        while ($right - $left >= $k) {
            if (abs($arr[$right] - $x) < abs($arr[$left] - $x)) {
                $left++;
            } else {
                $right--;
            }   
        }

        $res = [];
        for ($i = $left; $i <= $right; $i++) {
            $res[] = $arr[$i];
        }
 
        return $res;
    }

}
