<?php


class Solution {


    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums) {
        $ans = $max = $min = $nums[0];
     
        for($i=1; $i<count($nums); $i++){
            $n = $nums[$i];
           
            if($n < 0){
                $temp = $max;
                $max = $min;
                $min = $temp;
            }
   
            $max = max($n, $max*$n);
            $min = min($n, $min*$n);
         
            $ans = max($max, $ans);
        }

        return $ans;
    }
}
