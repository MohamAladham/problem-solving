<?php


class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function characterReplacement($s, $k) {
        $max = 0;
        $hash = [];
        $l = 0;
        $r = 0;

        while($r<strlen($s)){
            $hash[$s[$r]] = isset($hash[$s[$r]]) ? $hash[$s[$r]]+1 : 1;

            if(max($hash)+$k < $r-$l+1){
                $hash[$s[$l]]--;
                $l++;
            }

            $max = $r-$l+1;
            $r++;
        }

        return $max;
    }
}
