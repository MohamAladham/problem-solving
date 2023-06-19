<?php


class Solution {

    /**
     * @param Integer[] $gas
     * @param Integer[] $cost
     * @return Integer
     */
    function canCompleteCircuit($gas, $cost) {
        $startingIndex = 0;
        $totalGas = 0;

        if(array_sum($cost) > array_sum($gas)){
            return -1;
        }

        for($i=0; $i<count($gas); $i++){
            $totalGas += $gas[$i] - $cost[$i];

            if($totalGas < 0){
                $totalGas = 0;
                $startingIndex = $i+1;
            }
        }

        return $startingIndex;
    }
}
