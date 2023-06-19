<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
       $left = 0;
       $right = count($nums) - 1;

       while($left<=$right){
           $mid = (int) (($right + $left) / 2);
           $found = $nums[$mid];

           if($found === $target){
               return $mid;
           }elseif($found>$target){
               $right = $mid - 1;
           }else{
               $left = $mid + 1;
           }
       }

        return -1;
    }
}
