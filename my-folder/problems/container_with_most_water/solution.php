<?php


class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $left = 0;
        $right = count($height) - 1;
        $max = 0;

        while($left < $right){
            $max = max($max, ($right - $left) * min($height[$left], $height[$right]));

            if($height[$left] < $height[$right]){
                $left++;
            }else{
                $right--;
            }
        }

        return $max;
    }
}
