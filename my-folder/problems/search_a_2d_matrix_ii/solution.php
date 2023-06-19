<?php


class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target) {
        
        for($i=0; $i<count($matrix); $i++){
            $left = 0;
            $right = count($matrix[0]) - 1;

            while($left <= $right){
                $m = floor(($left+$right)/2);

                if($matrix[$i][$m] === $target){
                    return true;
                }elseif($matrix[$i][$m] > $target){
                    $right = $m - 1;
                }else{
                    $left = $m + 1;
                }
            }
        }

        return false;
    }
}
