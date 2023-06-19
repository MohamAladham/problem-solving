<?php


class Solution {

    /**
     * @param Integer[] $people
     * @param Integer $limit
     * @return Integer
     */
    function numRescueBoats($people, $limit) {
        $light = 0;
        $heavy = count($people) - 1;
        $total = 0;

        sort($people);

        while($light <= $heavy){
            if($people[$heavy] + $people[$light] <= $limit){
                $heavy--;
                $light++;
            }else{
                $heavy--;
            }

            $total++;
        }

        return $total;
    }
}
