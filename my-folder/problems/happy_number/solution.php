<?php


class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $sumFast = $sumLow = $n;

        while(true){
            $sumLow = $this->sumPow($sumLow);
            $sumFast = $this->sumPow($this->sumPow($sumFast));

            if($sumFast === 1){
                return true;
            }

            if($sumFast === $sumLow){
                return false;
            }
        }
    }


    function sumPow($n){
        $n = str_split($n);
        $sum = 0;

        foreach($n as $d){
            $sum += pow($d, 2);
        }

        return $sum;
    }
}
