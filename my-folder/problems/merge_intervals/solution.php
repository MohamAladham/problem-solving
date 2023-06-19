<?php


class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {
        /*
          -------
______________
        */
        
        sort($intervals);
        
        $ans = [array_shift($intervals)];

        foreach($intervals as [$start, $end]){
            if(($start >= end($ans)[0] && $start <= end($ans)[1])
            || ($start >= end($ans)[0] && $end <= end($ans)[1])
            || ($start <= end($ans)[1] && $end >= end($ans)[1])){
                $temp = array_pop($ans);
                array_push($ans, [min($temp[0], $start), max($temp[1], $end)]);
            }else{
                array_push($ans, [$start, $end]);
            }
        }

        return $ans;
    }
}
