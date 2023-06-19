<?php


class Solution {

    /**
     * @param Integer[] $piles
     * @param Integer $h
     * @return Integer
     */
    function minEatingSpeed($piles, $h) {
        $max = max($piles);
        $l = 1;
        $r = $max;
        $res = $max;

        while($l<=$r){
            $mid = (int)(($l+$r)/2);
            $time = 0;

            foreach($piles as $p){
                $time += ceil($p/$mid);
            }

            if($time > $h){
                $l = $mid + 1;
            }else{
                $res = min($mid, $res);
                $r = $mid - 1;
            }
        }

        return $res;
    }
}
