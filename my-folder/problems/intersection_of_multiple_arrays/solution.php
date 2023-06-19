<?php


class Solution {

    /**
     * @param Integer[][] $nums
     * @return Integer[]
     */
    function intersection($nums) {
        $hash = [];
        $ans = [];
        
        foreach($nums as $n){
            foreach($n as $nn){
                $hash[$nn] = isset($hash[$nn]) ? $hash[$nn] + 1 : 1;
            }
        }
        
        foreach($hash as $k=>$v){
            if($v === count($nums)){
                $ans[] = $k;
            }
        }
        
        sort($ans);
        
        return $ans;
    }
}
