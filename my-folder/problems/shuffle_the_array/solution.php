<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $new_arr = [];
        $left = 0;
        $right = $n;
      
        
        if($right === $left){
            return $nums;
        }


        while(true){
         
            if(isset($nums[$left])){
                $new_arr[] = $nums[$left];
                $left++;
            }
            
            if(isset($nums[$right])){
                $new_arr[] = $nums[$right];
                $right++;
            }
         
            if($left === $n){
                break;
            }
        }

        return $new_arr;
    }
}
