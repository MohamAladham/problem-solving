<?php


class Solution {

    /**
     * @param Integer[][] $costs
     * @return Integer
     */
    function twoCitySchedCost($costs) {
        $total = 0;
        $differences = [];
        $people = count($costs);

        foreach($costs as $c){
            $differences[] = [$c[0]-$c[1], $c[0], $c[1]];
        }

        sort($differences);

        foreach($differences as $i=>$diff){
            if($people/2 > $i){
                $total += $diff[1];
            }else{
                $total += $diff[2];
            }
        }

        return $total;
    }
}
