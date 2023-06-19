<?php


class Solution {

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        $positive = ($dividend < 0) == ($divisor < 0);
        $dividend = abs($dividend);
        $divisor = abs($divisor);
        $res = 0;
        
        while ($dividend >= $divisor) {
            $temp = $divisor;
            $i = 1;
            while ($dividend >= $temp) {
                $dividend -= $temp;
                $res += $i;
                $i += $i;
                $temp += $temp;
            }
        }

        if (!$positive) {
            $res = -$res;
        }
        
        return min(max(-2147483648, $res), 2147483647);
    }
}
