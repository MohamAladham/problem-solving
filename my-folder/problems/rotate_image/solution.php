<?php


class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $temp = [];

        for($i=0; $i<count($matrix); $i++){
            for($j=0; $j<count($matrix[0]); $j++){
                $temp[$i.'_'.$j] = $matrix[$i][$j];
                $matrix[$i][$j] = $temp[(count($matrix)-$j-1).'_'.$i] ?? $matrix[count($matrix)-$j-1][$i];
            }
        }
    }
}
