<?php


class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
      // amjbcbxdcvz
      // pwwkew
      
        $hash = [];
        $max = 0;
        $left = 0;

        for($right=0; $right<strlen($s); $right++){
            if(isset($hash[$s[$right]]) && $left < $hash[$s[$right]]+1){
                $left=$hash[$s[$right]]+1;
            }

            $hash[$s[$right]] = $right;
            $max = max($right-$left+1, $max);
        }

        return $max;
    }
}
