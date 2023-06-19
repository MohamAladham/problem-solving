<?php


class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $hash = ['I'=>1, 'V'=>5, 'X'=>10, 'L'=>50, 'C'=>100, 'D'=>500, 'M'=>1000];
        $sum = 0;
        // Biggest number should be first, otherwise, the number is going to be negative

        for($i=0; $i<strlen($s); $i++){
            if(isset($s[$i+1]) && $hash[$s[$i+1]] > $hash[$s[$i]]){
                $sum -= $hash[$s[$i]];
            }else{
                $sum += $hash[$s[$i]];
            }
        }

        return $sum;
    }
}
