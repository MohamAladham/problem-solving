<?php


class Solution {

    /**
     * @param String $n
     * @return Integer
     */
    function minPartitions($n) {

       	return max(str_split($n));

        $n = str_split($n);
        $max = 0;

        foreach($n as $a){
            $max = max($max, $a);
        }

        return $max;
    }
}
