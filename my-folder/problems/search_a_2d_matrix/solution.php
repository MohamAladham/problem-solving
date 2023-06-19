<?php


class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target) {
        $rows = count($matrix);
        $cols = count($matrix[0]);
        $top = 0;
        $bot = $rows - 1;

        while($top <= $bot){
            $row = (int) (($top + $bot) / 2);

           if($target > $matrix[$row][$cols-1]){
                $top = $row + 1;
            }elseif($target < $matrix[$row][0]){
                $bot = $row -1;
            }else{
                break;
            }
        }

        if($top>$bot){
            return false;
        }

        $row = (int) (($top + $bot) / 2);
        $l = 0;
        $r = $cols - 1;

        while($l<=$r){
            $mid = (int) (($l+$r)/2);

            if($target > $matrix[$row][$mid]){
                $l = $mid + 1;
            }elseif($target < $matrix[$row][$mid]){
                $r = $mid - 1;
            }else{
                return true;
            }
        }

        return false;
    }
}
