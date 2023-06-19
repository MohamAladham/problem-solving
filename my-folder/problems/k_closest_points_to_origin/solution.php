<?php


class Solution {

    /**
     * @param Integer[][] $points
     * @param Integer $k
     * @return Integer[][]
     */
    function kClosest($points, $k) {
        $heap = new SplMinHeap();
        $ans = [];

        foreach($points as $i=>[$x, $y]){
            $distance = sqrt(pow($x-0, 2) + pow($y-0, 2));
            $heap->insert([$distance, $i]);
        }


        while(!$heap->isEmpty() && $k-- > 0){
            $ans[] = $points[$heap->extract()[1]];
        }

        return $ans;
    }
}
