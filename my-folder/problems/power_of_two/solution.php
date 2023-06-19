<?php


class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
       return $this->sol1($n);
    }


    function sol1($n){
        $sum = 1;

        while(true){
            if($sum>$n){
                return false;
            }elseif($sum==$n){
                return true;
            }

            $sum = $sum * 2;
        }
    }
}
