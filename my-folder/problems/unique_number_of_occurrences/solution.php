<?php


class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        $hash_1 = [];
        $hash_2 = [];

        foreach($arr as $a){
            $hash[$a] = isset($hash[$a]) ? $hash[$a]+1 : 1;
        }
            
        foreach($hash as $k=>$v){
            if(isset($hash_2[$v])){
                return false;
            }

            $hash_2[$v] = true;
        }

        return true;
    }
}
