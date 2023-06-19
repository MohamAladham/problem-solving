<?php


class Solution {

    /**
     * @param String $s
     * @return String[]
     */
    function findRepeatedDnaSequences($s) {
        $k = 10;
        $s_len = strlen($s);
        
        if($s_len <= $k){
            return [];
        }
        
        $hash = [];
        $output = [];

        for($left=0; $left<$s_len; $left++){
            $sequence = substr($s, $left, $k);

            if(isset($hash[$sequence]) && $hash[$sequence] === 1){
                $output[] = $sequence;
            }

            $hash[$sequence] = isset($hash[$sequence]) ? $hash[$sequence]+1 : 1;
        }

        return $output;
    }
}
